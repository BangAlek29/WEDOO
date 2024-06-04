<?php

namespace App\Livewire;

use Livewire\Attributes\layout;
use App\Models\Mobil;
use Livewire\Component;

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
}
