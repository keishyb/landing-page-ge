<?php

namespace App\Livewire\Jumbotron;

use Livewire\Component;
use App\Models\jumbotron;

class ListJumbotron extends Component
{

    public $jumbotron;

    public function render()
    {
        return view('livewire.jumbotron.list-jumbotron');
    }

    public function mount()
    {
        $this->getJumbotron();
    }

    public function getJumbotron()
    {
        $this->jumbotron = jumbotron::get();
    }
}
