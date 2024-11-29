<?php

namespace App\Livewire\Welcome;

use App\Models\branch;
use Livewire\Component;

class BranchSection extends Component
{

    public $branch;

    public function render()
    {
        return view('livewire.welcome.branch-section');
    }

    public function mount()
    {
        $this->branch = branch::get();
    }
}
