<?php

use App\Http\Controllers\PercobaanController;
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
    return "
        <h1>Selamat datang di Praktikum PABWE. By Yosua Haloho</h1>
        <p>Silahkan tambahkan url berikut</p>
        <ol>
            <li>/modul</li>
            <li>/modul/{materi}</li>
            <li>/percobaan</li>
            <li>/login</li>
        </ol>";
});

Route::get('/modul', function () {
    return 'Selamat datang di Praktikum PABWE dengan alamat \'modul\' ';
});

Route::get('modul/{materi}', function ($materi) {
    return 'Selamat datang di modul Praktikum ' .$materi. ' PABWE';
});

Route::get('percobaan', [PercobaanController::class, 'index']);

Route::get('login', function() {
    return view('login');
});