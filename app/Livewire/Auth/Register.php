<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\layout;

#[layout('layout.login')]
class Register extends Component
{
    public function render()
    {
        return view('livewire.auth.register');
    }
}
