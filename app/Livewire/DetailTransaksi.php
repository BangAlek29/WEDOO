<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\layout;
use App\Models\vendor;

#[layout('layout.appvendor')]
class DetailTransaksi extends Component
{
    public $vendors;

    public function mount()
    {
        $this->vendors = Vendor::all();
    }

    public function render()
    {

        return view('livewire.detail-transaksi');
    }
}
