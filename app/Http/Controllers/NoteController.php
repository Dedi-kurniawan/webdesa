<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;
use App\Note;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;
use File;
use Session;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notes = Note::orderBy('created_at', 'desc')->paginate(10);
        return view('module.notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteRequest $request)
    {
        $data = $request->only(['title', 'content', 'slug', 'image', 'start_at', 'finish_at', 'lokasi']);

        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
           
        }

        $notes = Note::create($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4>agenda '.$notes->title.' telah di Tambah.'
        ]);

        return redirect(route ('agenda.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notes = Note::find($id);
        return view('module.notes.edit', compact('notes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoteRequest $request, $id)
    {
        $notes = Note::find($id);
        $data = $request->only(['title', 'content', 'slug', 'image', 'start_at', 'finish_at', 'lokasi']);

        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
            if ($notes->image !== '') $this->deleteImage($notes->image);
           
        }

        $notes->update($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> agenda '.$notes->title.' telah di Update.'
        ]);
        return redirect(route ('agenda.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notes  = Note::find($id);
        $data['image'] = $this->deleteImage($notes->image);
        $notes->delete();

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i> Berhasil !</h4> agenda '.$notes->title.' telah di hapus.'
        ]);
        return redirect('route'('agenda.index'));
    }

    public function saveImage(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(272, 203);
        $path_dir = base_path() . '/public/images/notes/'.$filename;
        $img->save($path_dir);
        return $filename;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'images/notes' 
            . DIRECTORY_SEPARATOR . $filename;

        return File::delete($path);
    }
}
