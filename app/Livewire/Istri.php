<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\layout;

#[layout('layout.login')]
class Istri extends Component
{
    public function render()
    {
        return view('livewire.istri');
    }
}
