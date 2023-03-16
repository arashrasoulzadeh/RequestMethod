<?php

namespace ArashRasoulzadeh\RequestMethod;

function RequestMethodRoutes()
{
	Route::get('call/{name}', [RequestMethodController::class, 'me']);
	dd('test');
}
