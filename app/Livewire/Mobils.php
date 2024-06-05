<?php

namespace App\Livewire;

use mysqli;
use App\Models\Mobil;
use App\Models\vendor;
use Livewire\Component;
use Livewire\Attributes\layout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

#[layout('layout.app')]
class Mobils extends Component
{
    public $mobils;

    public function mount()
    {
        $this->mobils = Mobil::all();
    }

    public function render()
    {
        return view('livewire.mobil', ['mobils' => $this->mobils]);
    }

    public function add($id_mobil)
    {
        // Eksekusi kueri untuk memperbarui tabel vendor
        DB::table('vendor')
            ->where('id_vendor', 'VNDR01')
            ->update(['id_mobil' => $id_mobil]);

        // Reset atau kirim notifikasi sukses
        session()->flash('message', 'ID Mobil berhasil ditambahkan.');
        $this->reset('id_mobil');
    }
    
    
}