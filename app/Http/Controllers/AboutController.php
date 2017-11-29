<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\About;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;
use File;
use Session;

class AboutController extends Controller
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
        $abouts = About::all();
        return view('module.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $data = $request->only(['title', 'content', 'image']);

        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
           
        }

        $abouts = About::create($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4>Profile '.$abouts->title.' telah di Tambah.'
        ]);

        return redirect(route ('about.index'));
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
         $abouts = About::find($id);
         return view('module.abouts.edit', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $abouts = About::find($id);
        $data = $request->only(['content', 'slug']);
        
        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
            if ($abouts->image !== '') $this->deleteImage($abouts->image);
           
        }

        $abouts->update($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Profile '.$abouts->title.' telah di Update.'
        ]);

        return redirect(route ('about.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts  = About::find($id);
        $data['image'] = $this->deleteImage($abouts->image);
        $abouts->delete();

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i> Berhasil !</h4> Profile '.$abouts->title.' telah di hapus.'
        ]);
        return redirect('route'('about.index'));
    }

    public function saveImage(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(1920, 920);
        $path_dir = base_path() . '/public/images/profile/'.$filename;
        $img->save($path_dir);
        return $filename;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'images/profile' 
            . DIRECTORY_SEPARATOR . $filename;

        return File::delete($path);
    }
}
