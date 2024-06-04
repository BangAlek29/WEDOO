<?php

namespace App\Livewire;

use App\Models\MC;
use Livewire\Component;

class MCs extends Component
{
    public $MCs;

    public function mount()
    {
        $this->MCs = MC::all();
    }
    public function render()
    {
        return view('livewire.m-c');
    }
}
