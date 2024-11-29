<?php

namespace App\Livewire\Tutor;

use App\Models\tutor;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTutor extends Component
{
    use WithFileUploads;
    public $gambar;
    public $nama;
    public $gelar;

    public function render()
    {
        return view('livewire.tutor.create-tutor');
    }

    public function submit()
    {
        $fileName = time() . '-' . $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
    
        tutor::create([
            'gambar' => $filePath,
            'nama' => $this->nama,
            'gelar' => $this->gelar,
        ]);
        return redirect ('/list-tutor');
    }
}
