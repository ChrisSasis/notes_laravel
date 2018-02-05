<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Note;
use App\Tag;

class HomeController extends Controller
{
    public $id;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $notes = Note::all();
        $activeuser = Auth::user();
        $tags = Tag::all();

        if($activeuser->id == 1) {
            return redirect('/4dM1N');
        } else {
            return view('home', ['notes' => $notes, 'activeuser' => $activeuser, 'tags' => $tags]);
        }
    }
}