<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return Socialite::driver('laravelpassport')->redirect();
});

Route::get('/callback', function () {
    $user = Socialite::driver('laravelpassport')->stateless()->user();

    dd($user);

    return redirect('/home');
});
