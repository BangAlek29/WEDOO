<?php

namespace App\Livewire;

use App\Models\Mobil;
use Livewire\Component;
use Livewire\WithFileUploads;

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
}
