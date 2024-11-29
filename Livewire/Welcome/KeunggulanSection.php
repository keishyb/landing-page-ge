<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class KeunggulanSection extends Component
{
    public $keunggulan;

    public function render()
    {
        return view('livewire.welcome.keunggulan-section');
    }
}
