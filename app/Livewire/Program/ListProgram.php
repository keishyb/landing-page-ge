<?php

namespace App\Livewire\Program;

use App\Models\program;
use Livewire\Component;

class ListProgram extends Component
{

    public $program;

    public function render()
    {
        return view('livewire.program.list-program');
    }

    public function mount()
    {
        $this->program = program::get();
    }
}

