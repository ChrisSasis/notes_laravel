<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Validator;

class TagsController extends Controller
{
    public function create() {
        return view('tags');
    }

    public function store(Request $request) {
        $tags = new Tag;
        
        $messages = [ 'tag' => 'The field is required'];

        $validateData = $this->validate($request, [
            'tag' => 'required',
        ],$messages);

        $tags->user_id = $request->user_id;
        $tags->tag = $request->tag;
        $tags->save();

        return redirect('/home');

    }
}
