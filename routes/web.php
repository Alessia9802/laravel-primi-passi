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
        "copyright" => 'Made by ©Boolean',
        "Year" => '2021'
        
    ];
    return view('home', $data);
}) -> name('home');

Route::get('/about', function () {
    $data = [
        "about" => 'Section About',
        "Year" => '2021'
        
    ];
    return view('about', $data);
}) -> name('about');

Route::get('/services', function () {
    $data = [
        "services" => 'Section Services',
        "Year" => '2021'
        
    ];
    return view('services', $data);
}) -> name('services');

Route::get('/contacts', function () {
    $data = [
        "contacts" => 'Section contacts',
        "Year" => '2021'
        
    ];
    return view('contacts', $data);
}) -> name('contacts');
