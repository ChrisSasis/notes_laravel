<?php

namespace App\Traits;

trait ExampleCodeTrait
{

	public function test($id,$u,$n,$t)
	{
		// $sum = $id + $u + $n + $t;


		// return $sum;
		if($id = 0) {
            
          return view('notes');

      } else if ($u->id == $n->user_id) {

          return view('notes', ['notes' => $n, "tags" => $t]);

      } else {
          return redirect('/home');

     }

	}

}