<?php

namespace App\Livewire\Welcome;

use Livewire\Component;

class BannerSection extends Component
{

    public $banner;

    public function render()
    {
        return view('livewire.welcome.banner-section');
    }
}
