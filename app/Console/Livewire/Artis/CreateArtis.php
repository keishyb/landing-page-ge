<?php

namespace App\Livewire\Artis;

use App\Models\artis;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArtis extends Component
{
    use WithFileUploads;
    public $nama;
    public $gambar;

    public function render()
    {
        return view('livewire.artis.create-artis');
    }

    public function submit()
    {
        $fileName = time() . '-' . $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
    
        artis::create([
            'nama' => $this->nama,
            'gambar' => $filePath,
        ]);
        return redirect ('/list-artis');
    }
}
