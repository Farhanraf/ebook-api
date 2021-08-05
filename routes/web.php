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
    return view ('welcome');
});

Route::get('/me', function () {
    return 'Farhan';
});

Route::get('.me', function(){
    return ['Farhan', 'KK4', 'XII RPL 3'];
});
Route::get('/me', function () {
    return [
        'NIS' => '3103119073',
        'Nama'=> 'Farhan',
        'Gender' => 'Male',
        'Phone' => '085328797002',
        'Kelas' => 'XII RPL 3'
    ];
});

Route::get('/me', function () {
    return response()->json(
        [
            'NIS' => '3103119073',
            'Nama'=> 'Farhan',
            'Gender' => 'Male',
            'Phone' => '085328797002',
            'Kelas' => 'XII RPL 3'
        ],201
    );
});