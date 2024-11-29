<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class IsiSection extends Component
{
    public $isi;

    public function render()
    {
        return view('livewire.welcome.isi-section');
    }
}
