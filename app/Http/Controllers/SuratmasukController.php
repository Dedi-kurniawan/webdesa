<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LatterRequest;

use App\Letter;
use Session;

class SuratmasukController extends Controller
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
        $surat = Letter::where('jenissurat', 1)->get();
        return view('module.latters.masuk.index', compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.latters.masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LatterRequest $request)
    {
        $data = $request->only(['nosurat', 'tanggal', 'tanggalsurat', 'pengirim', 'prihal', 'jenissurat', 'uraian']);

        $surat = Letter::create($data);
        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Surat masuk  Dengan No'.$surat->nosurat.' telah di Tambah.'
        ]);

        return redirect(route ('suratmasuk.index'));
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
        $surat = Letter::find($id);
        return view('module.latters.masuk.edit', compact('surat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LatterRequest $request, $id)
    {
         $surat = Letter::find($id);

        $data = $request->only(['tanggal', 'tanggalsurat', 'pengirim', 'prihal', 'jenissurat', 'uraian']);
        $surat->update($data);
         Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Surat masuk  Dengan No'.$surat->nosurat.' telah di Update.'
        ]);

        return redirect(route ('suratmasuk.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat = Letter::find($id);
        $surat->delete();

        Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i>  !</h4> Surat masuk  Dengan No'.$surat->nosurat.' telah di hapus.'
        ]);

        return redirect(route ('suratmasuk.index'));
    }

    public function cetak()
    {
        return view('module.latters.masuk.cetak');
    }
}
