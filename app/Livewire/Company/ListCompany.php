<?php

namespace App\Livewire\Company;

use App\Models\company;
use Livewire\Component;

class ListCompany extends Component
{
    public $company;

    public function render()
    {
        return view('livewire.company.list-company');
    }

    public function mount()
    {
        $this->getCompany();
    }

    public function getCompany()
    {
        $this->company = company::get();
    }
}
