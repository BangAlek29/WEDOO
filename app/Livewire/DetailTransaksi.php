<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use Livewire\Attributes\Layout;

#[Layout('layouts.appvendor')]
class DetailTransaksi extends Component
{
    public $transactionId;
    public $transaction;

    public function mount($transactionId)
    {
        $this->transactionId = $transactionId;
        $this->loadTransaction();
    }

    public function loadTransaction()
    {
        $this->transaction = Transaksi::with('vendors')->findOrFail($this->transactionId);
    }

    public function render()
    {
        return view('livewire.detail-transaksi', [
            'transaction' => $this->transaction,
        ]);
    }
}
