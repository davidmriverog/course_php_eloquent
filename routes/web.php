<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;

Route::get('/', function () {
    
    $user = new User;

    $user->name = 'David Rivero';
    $user->email = 'davidmriverog@gmail.com';
    $user->password = bcrypt('test');
    $user->gender = 'M';
    $user->biography = 'Full Stack - Developer.';

    if($user->save()){
        return 'Success create a new user.';
    }else{
        return 'Error a Create user.';
    }

});
