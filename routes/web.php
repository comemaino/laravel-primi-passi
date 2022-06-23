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
        'services' => [
            [
                'name' => 'Design',
                'description' => 'Lorem ipsum dolor'
            ],
            [
                'name' => 'Development',
                'description' => 'Lorem ipsum dolor'
            ],
            [
                'name' => 'Maintenance',
                'description' => 'Lorem ipsum dolor'
            ],
           
        ],
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $data = [
        'teamMembers' => [
            [
                'name' => 'Paolo',
                'lastname' => 'Bianchi',
                'role' => 'Presidente'
            ],
            [
                'name' => 'Mario',
                'lastname' => 'Rossi',
                'role' => 'Vice Presidente'
            ],
            [
                'name' => 'Stefano',
                'lastname' => 'Verdi',
                'role' => 'CFO'
            ],
            [
                'name' => 'Giovanni',
                'lastname' => 'Blu',
                'role' => 'Responsabile Vendite'
            ],
           
        ],
    ];
    return view('about', $data);
})->name('about');
