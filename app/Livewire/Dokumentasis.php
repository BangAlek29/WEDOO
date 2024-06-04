<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\dokumentasi;
use Livewire\Attributes\layout;

#[layout('layout.app')]
class Dokumentasis extends Component
{   
    public $dokumentasis;

    public function mount()
    {
        $this->dokumentasis = dokumentasi::all();
    }

    public function render()
    {
        return view('livewire.dokumentasi');
    }
}
