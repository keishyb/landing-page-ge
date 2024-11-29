<?php

namespace App\Livewire\Branch;

use App\Models\branch;
use Livewire\Component;

class ListBranch extends Component
{
    public $branch;
    
    public function render()
    {
        return view('livewire.branch.list-branch');
    }

    public function mount()
    {
        $this->getBranch();
    }

    public function getBranch()
    {
        $this->branch = branch::get();
    }
}
