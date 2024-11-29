<?php

namespace App\Livewire\Media;

use App\Models\media;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateMedia extends Component
{
    use WithFileUploads;
    public $gambar;
    public $source;
    public $desc;

    public function render()
    {
        return view('livewire.media.create-media');
    }

    public function submit()
    {
        $fileName = time() . '-' . $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
    
        media::create([
            'gambar' => $filePath,
            'source' => $this->source,
            'desc' => $this->desc,
        ]);
        return redirect ('/list-media');
    }
}
