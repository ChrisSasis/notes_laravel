<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Note;

class Tag extends Model
{
    //
	protected $table ="tags";

	public function note() {
		return $this->hasMany(Note::class);
	}
}
