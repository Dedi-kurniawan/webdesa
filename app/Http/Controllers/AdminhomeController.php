<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Letter;
use App\Post;
use App\Note;
use App\User;

class AdminhomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function adminhome()
    {
    	$suratmasuk = Letter::where('jenissurat', 1)->get();
    	$suratmasukTotal = $suratmasuk->count();

    	$suratkeluar = Letter::where('jenissurat', 2)->get();
    	$suratkeluarTotal = $suratkeluar->count();

    	$totalAll = $suratkeluarTotal + $suratmasukTotal;

    	$post = Post::all();
    	$postTotal = $post->count();

    	$agenda = Note::all();
    	$agendaTotal = $agenda->count();

    	$user = User::all();
    	$userTotal = $user->count();

    	return view('home', compact('suratmasukTotal', 'suratkeluarTotal', 'totalAll', 'postTotal', 'agendaTotal', 'userTotal'));
    }
}
