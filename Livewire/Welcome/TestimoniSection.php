<?php

namespace App\Livewire\Welcome;

use Livewire\Component;
use App\Models\testimoni;

class TestimoniSection extends Component
{
    public $testimoni;

    public function render()
    {
        return view('livewire.welcome.testimoni-section');
    }

    public function mount()
    {
        $this->testimoni = testimoni::get();
    }
}
