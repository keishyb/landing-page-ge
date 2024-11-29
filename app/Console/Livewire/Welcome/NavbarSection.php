<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class NavbarSection extends Component
{
    public $navbar;

    public function render()
    {
        return view('livewire.welcome.navbar-section');
    }
}
