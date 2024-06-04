<?php

namespace App\Livewire;

use App\Models\Vendor;
use Livewire\Component;
use Livewire\Attributes\layout;

#[layout('layout.appvendor')]
class Vendors extends Component
{
    public $vendors;

    public function mount()
    {
        $this->vendors = Vendor::all();
    }
    public function render()
    {
        return view('livewire.vendor');
    }
}
