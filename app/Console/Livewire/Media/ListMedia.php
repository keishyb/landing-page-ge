<?php

namespace App\Livewire\Media;

use App\Models\media;
use Livewire\Component;

class ListMedia extends Component
{

    public $media;

    public function render()
    {
        return view('livewire.media.list-media');
    }

    public function mount()
    {
        $this->getMedia();
    }

    public function getMedia()
    {
        $this->media = media::get();
    }
}
