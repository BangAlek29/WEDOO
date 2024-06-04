<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\layout;

#[layout('layout.appvendor')]
class Transaksi extends Component
{
    public function render()
    {
        return view('livewire.transaksi');
    }
}
