<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'nama' => 'AI RIRIS SYAIDAH',
        'nim' => '251011701108',
        'prodi' => 'SISTEM INFORMASI',
        'tugas' => 'Tugas Rekayasa Web'
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});
