<?php

namespace App\Livewire\Artis;

use App\Models\artis;
use Livewire\Component;

class ListArtis extends Component
{

    public $artis;

    public function render()
    {
        return view('livewire.artis.list-artis');
    }

    public function mount()
    {
        $this->getArtis();
    }

    public function getArtis()
    {
        $this->artis = artis::get();
    }
}
