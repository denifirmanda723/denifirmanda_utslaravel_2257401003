<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/daftar', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    $nim = '2257401003'; 
    $nama = 'DENI FIRMANDA'; 
    $kelas = 'Mi22B'; 
    return view('dashboard', compact('nim', 'nama', 'kelas'));
})->name('dashboard');

Route::post('/login', function () {
    return redirect()->route('dashboard');
});

Route::post('/logout', function () {
    return redirect()->route('home');
});
