<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class KonsulSection extends Component
{
    public $konsul;

    public function render()
    {
        return view('livewire.welcome.konsul-section');
    }
}
