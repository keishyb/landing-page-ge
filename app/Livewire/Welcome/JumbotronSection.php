<?php

namespace App\Livewire\Welcome;

use Livewire\Component;
use App\Models\jumbotron;

class JumbotronSection extends Component
{
    public $jumbotron;

    public function render()
    {
        return view('livewire.welcome.jumbotron-section');
    }

    public function mount()
    {
        $this->jumbotron = jumbotron::get();
    }
}
