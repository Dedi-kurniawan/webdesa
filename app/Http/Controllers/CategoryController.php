<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Session;

use App\Http\Requests\ValidationRequest;

class CategoryController extends Controller
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
        $category = Category::orderBy('created_at', 'desc')->paginate(10);
        return view('module.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRequest $request)
    {
        $data = Category::create(['title' => $request->title,
                                  'slug'  => str_slug($request->title, '-')
                                ]);

        Session::flash('flash_notification', [
            'level'=>'success',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Category' .$data->title . ' telah di tambah.'
        ]);
       
        return redirect(route ('category.index'));
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
        $category = Category::find($id);
        return view('module.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationRequest $request, $id)
    {
        $category = Category::find($id);
        $category->update(['title' => $request->title,
                           'slug'  => str_slug($request->title, '-')]);
        Session::flash('flash_notification', [
            'level'=>'info',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Category' .$category->title . ' telah di update.'
        ]);

        return redirect(route ('category.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $category = Category::find($id);
      $category->delete();

      Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Category' .$category->title . ' telah di Hapus.'
        ]);       
      return redirect( route('category.index'));
    }
}
