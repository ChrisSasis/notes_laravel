<?php

namespace App\Room;
use App\Repo\ClassroomInterface;

class Classroom implements ClassroomInterface
{

	public function getAll(){
		return 'string dapat';
	}

	public function find($id){
		return 'finding';
	}

	public function delete($id){
		return 'delete';
	}
}