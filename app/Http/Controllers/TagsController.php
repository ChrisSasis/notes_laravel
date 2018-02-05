<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function create() {
        return view('tags');
    }

    public function store(Request $request) {
        $tags = new Tag;

        $tags->user_id = $request->user_id;
        $tags->tag = $request->tag;
        $tags->save();

        return redirect('/home');

    }
}
