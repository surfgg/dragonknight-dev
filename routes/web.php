<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'Pages\WelcomeController@welcome')->name('welcome');
