<?php

namespace App\Livewire;

use App\Models\Venue;
use Livewire\Component;

class Venues extends Component
{
    public $venues;

    public function mount()
    {
        $this->venues = Venue::all();
    }
    public function render()
    {
        return view('livewire.venue');
    }
}
