<?php

namespace App\Repo;

interface ClassroomInterface
{
	public function getAll();

	public function find($id);

	public function delete($id);
}