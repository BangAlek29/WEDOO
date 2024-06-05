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
    public $selectedVendorId;
    public $transactionId;

    public function mount($transactionId)
    {
        $this->transactionId = $transactionId;
        $this->vendors = Vendor::all();
    }

    public function render()
    {
        return view('livewire.vendor', [
            'vendors' => $this->vendors,
        ]);
    }

    public function selectVendor($vendorId)
    {
        $this->selectedVendorId = $vendorId;

        $transaction = Transaksi::findOrFail($this->transactionId);
        $transaction->vendors()->attach($vendorId);

        // Emit an event or redirect if necessary
        $this->emit('vendorSelected', $vendorId);
    }
}
