<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\layout;

#[layout('layout.appvendor')]
class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact');
    }
}
