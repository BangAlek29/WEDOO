<?php

use App\Livewire\MCs;
use App\Livewire\Mobils;
use App\Livewire\Venues;
use App\Livewire\Contact;
use App\Livewire\periass;
use App\Livewire\Vendors;
use App\Livewire\caterings;
use App\Livewire\Souvenirs;
use App\Livewire\Transaksi;
use App\Livewire\Akomodasis;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\DetailTransaksi;
use App\Livewire\dokumentasis;
use App\Livewire\entertainments;
use App\Livewire\Istri;
use App\Livewire\Suami;
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
Route::get('/', Vendors::class);
Route::get('/transaksi', Transaksi::class);
Route::get('/contact', Contact::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);
Route::get('/istri', Istri::class);
Route::get('/suami', Suami::class);
Route::get('/detailtransaksi', DetailTransaksi::class);



