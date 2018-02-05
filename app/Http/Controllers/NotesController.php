<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Note;
use App\Tag;
use App\Person;
use App\Traits\ExampleCodeTrait;
use App\Room\Classroom;

class NotesController extends Controller
{

    use ExampleCodeTrait;

    public function create() {

        // interface example
        // $classroom = new Classroom;
        // dd($classroom->getAll());

        // trait example
        // dd($this->test(1,2,3,4));

        $tags = Tag::all();
    	return view('notes', ["tags" => $tags]);

    }

    public function store(Request $request) {
        $notes = new Note;

        $validateData = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'tag_id' => 'required',
        ]);

        $notes = $request->only(['user_id', 'title', 'description', 'tag_id']);
        
        Note::create($notes);

        return redirect('/home');

    }

    public function edit($id) {

    	$notes = Note::find($id);
        $tags = Tag::all();

        return $this->test($id, Auth::user(), $notes, $tags );

    }


    public function update(Request $request, $id) {
    	$notes = Note::find($id);       

        $notes->update([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'tag_id' => $request->tag_id,
        ]);

    	return redirect('/home');
    }

    public function destroy($id) 
    {
        $notes = Note::find($id);
        $notes->delete();
        return redirect('/home');
    }

}
