<?php

namespace App\Livewire\Welcome;

use App\Models\tutor;
use Livewire\Component;

class TutorSection extends Component
{
    public $tutor;

    public function render()
    {
        return view('livewire.welcome.tutor-section');
    }

    public function mount()
    {
        $this->tutor = tutor::get();
    }
}
