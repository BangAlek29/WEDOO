<?php

namespace App\Livewire;

use App\Models\Vendor;
use App\Models\pelanggan;
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

    public function selectVendor($vendorId)
    {
        $this->vendors = $vendorId;

        // Ambil pelanggan berdasarkan user yang sedang login
        $pelanggan = Pelanggan::where('id_pelanggan')->first();

        if ($pelanggan) {
            // Update kolom id_vendor di tabel pelanggan
            $pelanggan->update(['id_vendor' => $vendorId]);
        } else {
            // Jika pelanggan belum ada, Anda dapat membuatnya
            Pelanggan::create([
                'id_pelanggan',
                'id_vendor' => $vendorId,
                // Tambahkan kolom lain yang diperlukan
            ]);
        }

        // Emit sebuah event atau mengarahkan ke halaman lain jika perlu
        // $this->emit('vendorSelected', $vendorId);
        // return redirect()->route('some.route');
    }
}
