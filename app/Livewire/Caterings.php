<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\catering;
use Livewire\Attributes\layout;

#[layout('layout.app')]
class Caterings extends Component
{

    public $caterings;

    public function mount()
    {
        $this->caterings = catering::all();
    }
    public function render()
    {
        return view('livewire.catering');
    }
}
