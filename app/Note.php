<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Note extends Model
{
    protected $table ="notes";

    protected $fillable = ['user_id', 'title', 'description', 'tag_id'];
    
    public function tag() {
    	return $this->belongsTo(Tag::class);
    }

}
