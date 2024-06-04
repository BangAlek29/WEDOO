<?php

namespace App\Livewire;

use App\Models\Souvenir;
use Livewire\Component;

class Souvenirs extends Component
{
    public $souvenirs;

    public function mount()
    {
        $this->souvenirs = Souvenir::all();
    }
    public function render()
    {
        return view('livewire.souvenir');
    }
}
