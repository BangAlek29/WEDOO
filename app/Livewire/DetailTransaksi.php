<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use App\Models\Vendor;
use Livewire\Attributes\Layout;

#[Layout('layout.appvendor')]
class DetailTransaksi extends Component
{
    public $vendor;

    public function mount()
    {
        $this->vendor = Vendor::with([
            'mobil',
            'venue',
            'souvenir',
            'penghulu',
            'mc',
            'akomodasi',
            'dokumentasi',
            'catering',
            'entertainment',
            'perias'
        ])->get();
    }

    public function render()
    {
        return view('livewire.detail-transaksi', ['vendor' => $this->vendor]);
    }
}
