<?php

namespace App\Livewire;

use App\Models\perias;
use Livewire\Component;

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
