<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use App\Banner;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;
use File;
use Session;

class BannerController extends Controller
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
        $banner = Banner::orderBy('created_at', 'desc')->paginate(10);
        return view('module.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $data = $request->only(['title', 'content', 'image', 'status']);
        if($request->hasFile('image'))
        {
            $data['image'] = $this->saveImage($request->file('image'));
        }

            $banner = Banner::create($data);
            Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4>Banner '.$banner->title.' telah di Tambah.'
        ]);

        return redirect(route ('banner.index'));
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
        $banner  = Banner::find($id);
        return view('module.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
        $banner  = Banner::find($id);
        $data = $request->only(['title', 'content', 'image', 'status']); 
        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));
            if ($banner->image !== '') $this->deleteImage($banner->image);
           
        }

        $banner->update($data);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> banner '.$banner->title.' telah di Update.'
        ]);
        return redirect('route'('banner.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner  = Banner::find($id);
        $data['image'] = $this->deleteImage($banner->image);
        $banner->delete();

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i> Berhasil !</h4> banner '.$banner->title.' telah di hapus.'
        ]);
        return redirect('route'('banner.index'));
    }

    private $extensionList = array("jpeg", "jpg", "gif");

    public function saveImage(UploadedFile $image)
    {   
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(1920, 920);
        $path_dir = base_path() . '/public/images/banner/'.$filename;
        $img->save($path_dir);
        return $filename;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'images/banner' 
            . DIRECTORY_SEPARATOR . $filename;

        return File::delete($path);
    }
}
