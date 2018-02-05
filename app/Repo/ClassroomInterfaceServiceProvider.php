<?php 

namespace App\Interface;

use Illuminate\Support\ServiceProvider;

class UserRepoServiceProvide extends ServiceProvider
{
	public function boot()
	{

	}

	public function register()
	{
		$this->app->bind('App\Room\RoomInterface', 'App\Interface\Classroom');
	}
}