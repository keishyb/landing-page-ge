<?php

namespace App\Livewire\Welcome;

use App\Models\media;
use Livewire\Component;

class MediaSection extends Component
{
    public $media;

    public function render()
    {
        return view('livewire.welcome.media-section');
    }

    public function mount()
    {
        $this->media = media::get();
    }
}
