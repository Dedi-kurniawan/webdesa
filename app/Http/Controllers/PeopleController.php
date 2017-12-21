<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PerangkatRequest;
use App\Member;
use Session;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;
use File;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $perangkat = Member::paginate(10);
         return view('module.peoples.index', compact('perangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.peoples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerangkatRequest $request)
    {
        $data = $request->only('nama', 'jabatan', 'facebook', 'twiter', 'instagram');

        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));           
        }

        $perangkat = Member::create($data);

        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4>agenda '.$perangkat->nama.' telah di Tambah.'
        ]);

        return redirect(route ('perangkatdesa.index'));
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
        $perangkat = Member::find($id);
        return view('module.peoples.edit', compact('perangkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerangkatRequest $request, $id)
    {
        $perangkat = Member::find($id);
        $data = $request->only('nama', 'jabatan', 'facebook', 'twiter', 'instagram');

        if ($request->hasFile('image')) 
        {
            $data['image'] = $this->saveImage($request->file('image'));           
        }

        $perangkat->update($data);

        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4>agenda '.$perangkat->nama.' telah di Tambah.'
        ]);

        return redirect(route ('perangkatdesa.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perangkat  = Member::find($id);
        $data['image'] = $this->deleteImage($perangkat->image);
        $perangkat->delete();

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i> Berhasil !</h4> agenda '.$perangkat->title.' telah di hapus.'
        ]);
        return redirect('route'('perangkatdesa.index'));
    }

    public function saveImage(UploadedFile $image)
    {   
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension; 
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(203, 203);
        $path_dir = base_path() . '/public/images/perangkatdesa/'.$filename;
        $img->save($path_dir);
        return $filename;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'images/perangkatdesa' 
            . DIRECTORY_SEPARATOR . $filename;

        return File::delete($path);
    }
}
