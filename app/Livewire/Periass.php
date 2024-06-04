<?php

namespace App\Livewire;

use App\Models\perias;
use Livewire\Component;
use Livewire\Attributes\layout;

#[layout('layout.app')]
class Periass extends Component
{
    public $periass;

    public function mount()
    {
        $this->periass = perias::all();
    }
    public function render()
    {
        return view('livewire.perias');
    }
}
