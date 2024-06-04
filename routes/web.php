<?php

use App\Livewire\MCs;
use App\Livewire\Mobils;
use App\Livewire\Venues;
use App\Livewire\periass;
use App\Livewire\caterings;
use App\Livewire\Souvenirs;
use App\Livewire\Akomodasis;
use App\Livewire\dokumentasis;
use App\Livewire\entertainments;
use Illuminate\Support\Facades\Route;


Route::get('/catering', Caterings::class);
Route::get('/dokumentasi', dokumentasis::class);
Route::get('/entertainment', entertainments::class);
Route::get('/mc', MCs::class);
Route::get('/Mobil', Mobils::class);
Route::get('/perias', periass::class);
Route::get('/souvenir', Souvenirs::class);
Route::get('/venue', Venues::class);
Route::get('/akomodasi', akomodasis::class);

Route::get('/', function () {
    return view('livewire.vendor');
})->name('vendor.page');

Route::get('/transaksi', function () {
    return view('livewire.transaksi');
})->name('transaksi.page');

Route::get('/contact', function () {
    return view('livewire.contact');
})->name('contact.page');

Route::get('/login', function () {
    return view('livewire.auth.login');
})->name('login.page');

Route::get('/register', function () {
    return view('livewire.auth.register');
})->name('login.page');


