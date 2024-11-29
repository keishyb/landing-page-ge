<?php

namespace App\Livewire\Welcome;

use App\Models\company;
use Livewire\Component;

class CompanySection extends Component
{
    public $company;

    public function render()
    {
        return view('livewire.welcome.company-section');
    }

    public function mount()
    {
        $this->company = company::get();
    }
}
