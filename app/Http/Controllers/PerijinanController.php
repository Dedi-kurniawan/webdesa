<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;
use File;
use Session;


class PerijinanController extends Controller
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
        $layanan = Service::where('layanan', 2)->paginate(10);
        return view('module.services.perijinan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.services.perijinan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $data = $request->only(['title', 'content', 'slug', 'image', 'layanan']);

        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
           
        }

        $perijinan = Service::create($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4>perijinan '.$perijinan->title.' telah di Update.'
        ]);

        return redirect(route ('perijinan.index'));
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
        $perijinan = Service::find($id);
        return view('module.services.perijinan.edit', compact('perijinan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $perijinan = Service::find($id);
        $data = $request->only(['title', 'content', 'slug', 'image', 'layanan']);

        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
           
        }

        $perijinan->update($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4>perijinan '.$perijinan->title.' telah di Tambah.'
        ]);

        return redirect(route ('perijinan.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perijinan  = Service::find($id);
        $data['image'] = $this->deleteImage($perijinan->image);
        $perijinan->delete();

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i> Berhasil !</h4> agenda '.$perijinan->title.' telah di hapus.'
        ]);
        return redirect('route'('perijinan.index'));
    }

    public function saveImage(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(272, 203);
        $path_dir = base_path() . '/public/images/service/'.$filename;
        $success = $img->save($path_dir);

        if ($success) 
        {
           $img = Image::make($_FILES['image']['tmp_name']);
           $img->resize(1920, 920);
           $thumbnail = base_path() . '/public/images/service/tumb_'.$filename;
           $img->save($thumbnail);
        }
        return $filename;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'images/service' 
            . DIRECTORY_SEPARATOR . $filename;
       $thumbnail = base_path() . '/public/images/service/tumb_'.$filename;

        return File::delete($path, $thumbnail);
    }
}