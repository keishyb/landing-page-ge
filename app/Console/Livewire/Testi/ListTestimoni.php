<?php

namespace App\Livewire\Testi;

use Livewire\Component;
use App\Models\testimoni;

class ListTestimoni extends Component
{

    public $testimoni;

    public function render()
    {
        return view('livewire.testi.list-testimoni');
    }

    public function mount()
    {
        $this->getTestimoni();
    }

    public function getTestimoni()
    {
        $this->testimoni = testimoni::get();
    }
}
