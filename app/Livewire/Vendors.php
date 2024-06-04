<?php

namespace App\Livewire;

use App\Models\Vendor;
use Livewire\Component;

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
