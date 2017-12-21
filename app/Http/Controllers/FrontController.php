<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\About;
use App\Note;
use App\Post;
use App\Category;
use App\Member;
use App\Service;

class FrontController extends Controller
{
    public function welcome()
    {
    	$bannersatu = Banner::where('status', 1)->get();
    	$bannerdua = Banner::where('status', 2)->get();

        $agenda = Note::orderBy('start_at', 'asc')->paginate(4);

        $kegiatan = Post::orderBy('created_at', 'des')->paginate(4);

        $berita = Post::orderBy('created_at', 'asc')->paginate(8);

        $populerkiri = Post::orderBy('created_at', 'des')->paginate(2);
        $populerkanan = Post::orderBy('created_at', 'asc')->paginate(2);

        // $category = category::all();

    	return view('/welcome', compact('bannersatu', 'bannerdua', 'agenda', 'kegiatan', 'berita', 'populerkiri', 'populerkanan'));
    }

    public function visi()
    {
    	$visi = About::where('title', 1)->get();
    	$misi = About::where('title', 2)->get();

    	return view('module.fronts.profile', compact('visi', 'misi'));
    }

    public function sejarah()
    {
      	$sejarah = About::where('title', 3)->get();

    	return view('module.fronts.sejarah', compact('sejarah'));
    }

    public function perangkatdesa()
    {
        $perangkat = Member::all();

        return view('module.fronts.perangkatdesa', compact('perangkat'));
    }

    public function blogall()
    {
        $blog = Post::paginate(12);
        return view('module.fronts.blog', compact('blog'));
    }

    public function blog($slug)
    {
        $blog = Category::where('slug', $slug)
                        ->first()
                        ->posts()
                        ->paginate(12);
        return view('module.fronts.blog', compact('blog'));
    }

    public function blogpost($slug)
    {
        $recent = Post::orderBy('created_at', 'des')->get();
        $categories = Category::with('posts')
                              ->orderBy('title', 'asc')
                              ->get();
        $post = Post::where('slug', $slug)->first();
        return view('module.fronts.showblog', compact('post', 'categories', 'recent'));
    }

    public function agenda()
    {
        $agenda = Note::paginate(5);
        return view('module.fronts.agenda', compact('agenda'));
    }

    public function agendapost($slug)
    {
        $agendapost = Note::where('slug', $slug)->first();
        return view('module.fronts.showagenda', compact('agendapost'));
    }

    public function kependudukan()
    {
        $kependudukan = Service::where('layanan', 1)->orderBy('created_at', 'asc')->paginate(8);
        return view('module.fronts.kependudukan', compact('kependudukan'));
    }

    public function kependudukanpost($slug)
    {
        $kependudukanpost = Service::where('slug', $slug)->first();
        return view('module.fronts.showkependudukan', compact('kependudukanpost'));
    }

    public function perijinan()
    {
        $perijinan = Service::where('layanan', 2)->orderBy('created_at', 'asc')->paginate(8);
        return view('module.fronts.perijinan', compact('perijinan'));
    }

    public function perijinanpost($slug)
    {
        $perijinanpost = Service::where('slug', $slug)->first();
        return view('module.fronts.showperijinan', compact('perijinanpost'));
    }


}
