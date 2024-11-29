<?php

namespace App\Livewire\Tutor;

use App\Models\tutor;
use Livewire\Component;

class ListTutor extends Component
{

    public $tutor;

    public function render()
    {
        return view('livewire.tutor.list-tutor');
    }

    public function mount()
    {
        $this->getTutor();
    }

    public function getTutor()
    {
        $this->tutor = tutor::get();
    }
}
