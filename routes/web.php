<?php

use Illuminate\Support\Facades\Route;

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

    $data = [
        'name' => 'Michele',
        'abbigliamenti' => [
            'maglia',
            't-shirt',
            'pantalone'
        ],
        
    'giusto' => true
];
    return view('home', $data);
}) -> name('home');

Route::get('/about', function () {
    return view('about');
}) -> name('about');

Route::get('/contacts', function () {
    return view('contacts');
}) -> name('contacts');

Route::get('/info', function () {
    return view('info');
}) -> name('info');