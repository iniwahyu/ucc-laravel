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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/peserta', function() {
    return view ('peserta');
});

Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');
Route::get('/logout', 'UserController@logout');

Route::get('/login', function () {
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('login');
})->name('login');

Route::get('/register', function () {
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::middleware(['auth'])->group (function (){
    Route::get('/user', function (){
        return view('user');
    });
    Route::get('/admin', function (){
        $role = Auth::user()->role;
        if($role != 'admin'){
            return redirect('login');
        }
        return view('admin.index');
    });

    Route::get('lomba', 'LombaController@index');

    Route::get('lomba/add', 'LombaController@add');
    Route::post('lomba', 'LombaController@create');
    
    // Edit
    Route::get('lomba/{id}/edit', 'LombaController@edit');
    Route::post('lomba/{id}/edit', 'LombaController@update');
    // Delete
    Route::get('lomba/{id}/delete', 'LombaController@delete');
    Route::get('lomba/{id}/confirmDelete', 'LombaController@confirmDelete');
});

// DAFTAR LOMBA

/*
php artisan make:model Lomba -m
php artisan make:controller LombaController

USER
GET /lomba
GET /lomba/id

admin
GET /lomba/add
GET /lomba/id/edit
POST /lomba
PUT /lomba/id
DELETE /lomba/id

*/
Route::get('lomba/{id}', 'LombaController@detail');





Route::get('mypagination', 'LombaController@pagination');
