<?php

namespace App\Livewire\Welcome;

use App\Models\program;
use Livewire\Component;

class ProgramSection extends Component
{
    public $program;

    public function render()
    {
        return view('livewire.welcome.program-section');
    }
    
    public function mount()
    {
        $this->program = program::get();
    }


}
