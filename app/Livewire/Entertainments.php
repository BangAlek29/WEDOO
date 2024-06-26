<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\entertainment;
use Livewire\Attributes\layout;

#[layout('layout.app')]
class Entertainments extends Component
{
    public $Entertainments;

    public function mount()
    {
        $this->Entertainments = entertainment::all();
    }
    public function render()
    {
        return view('livewire.entertainment');
    }
}
