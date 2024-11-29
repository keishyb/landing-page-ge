<?php

namespace App\Livewire\Program;

use App\Models\program;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProgram extends Component
{

    use WithFileUploads;
    public $judul;
    public $deskripsi;
    public $gambar;

    public function render()
    {
        return view('livewire.program.create-program');
    }

    public function submit()
    {
        $fileName = time() . '-' . $this->gambar->Extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
    
        program::create([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'gambar' => $filePath,
        ]);
        return redirect ('/list-program');
    }

}
