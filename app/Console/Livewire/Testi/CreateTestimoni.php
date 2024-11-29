<?php

namespace App\Livewire\Testi;

use Livewire\Component;
use App\Models\testimoni;
use Livewire\WithFileUploads;

class CreateTestimoni extends Component
{
    use WithFileUploads;
    public $desc;
    public $nama;
    public $asal_pt;
    public $gambar;

    public function render()
    {
        return view('livewire.testi.create-testimoni');
    }

    public function submit()
    {
        $fileName = time() . '-' . $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
    
        testimoni::create([
            'desc' => $this->desc,
            'nama' => $this->nama,
            'asal_pt' => $this->asal_pt,
            'gambar' => $filePath,
        ]);
        return redirect ('/list-testimoni');
    }
}
