<?php

namespace App\Livewire;

use App\Models\Vendor;
use App\Models\Pelanggan;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.appvendor')]
class Vendors extends Component
{
    public $vendors;

    public function mount($vendor)
    {
        $this->vendors = Vendor::all();
    }

    public function render()
    {
        return view('livewire.vendor', [
            'vendors' => $this->vendors,
        ]);
    }

}
