<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\akomodasi;

class Akomodasis extends Component
{
    public $akomodasis;

    public function mount()
    {
        $this->akomodasis = akomodasi::all();
    }
    public function render()
    {
        return view('livewire.akomodasi');
    }
}
