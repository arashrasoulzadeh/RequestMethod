<?php

namespace ArashRasoulzadeh\RequestMethod;

use Illuminate\Support\ServiceProvider;

class RequestMethodServiceProvider extends ServiceProvider
{
	public function boot()
	{
	}

	public function register()
	{
		$this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
	}
}
