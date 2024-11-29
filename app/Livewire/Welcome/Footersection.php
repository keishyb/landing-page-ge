<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class FooterSection extends Component
{
    public $footer;

    public function render()
    {
        return view('livewire.welcome.footer-section');
    }
}
