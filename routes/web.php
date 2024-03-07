<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Admin\Home;
use App\Livewire\Register;
use App\Livewire\Logout;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',Login::class)->name('user.login');



Route::get('register',Register::class)->name('user.register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('home',Home::class)->name('admin.home');
    Route::get('logout',Logout::class)->name('logout');
});
