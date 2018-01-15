<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use EloquentORM\User;

Route::get('/create', function () {
    //return view('welcome');
    
	$user=User::create([
		'name' => 'Lynda Morales',
		'email' => 'lindaf@mail.com',
		'password' => bcrypt('123123'),
		'gender' => 'm', 
		'biography' => 'Alumna de PHP'
	]);

	return 'Usuario Gurdado';

});

Route::get('/update-user', function () {
    //return view('welcome');
    
	$user=User::find(3);

	$user->gender='f';
	//$user->biography='I am Programmer';

	$user->save();

	return 'Usuario actualizado';

});
