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
        'menu_items' => [
            'home' => [
                'name' => 'Home',
                'href' => ''
            ],
            'beautiful-framework' => [
                'name' => 'Beautiful Framework',
                'href' => 'beautiful-framework'
            ]
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('beautiful-framework', function () {
    return view('beautiful-framework');
})->name('beautiful framework');
