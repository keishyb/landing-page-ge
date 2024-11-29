<?php

namespace App\Livewire\Welcome;

use App\Models\artis;
use Livewire\Component;

class ArtisSection extends Component
{
    public $artis;

    public function render()
    {
        return view('livewire.welcome.artis-section');
    }

    public function mount()
    {
        $this->artis = artis::get();
    }
}
