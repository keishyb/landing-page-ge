<?php

namespace App\Livewire\Program;

use App\Models\program;
use Livewire\WithFileUploads;
use Livewire\Component;

class EditProgram extends Component
{
    use WithFileUploads;
    public $code;
    public $judul;
    public $deskripsi;
    public $gambar;

    public function render()
    {
        return view('livewire.program.edit-program');
    }

    public function mount()
    {
        $data = program::where('id', $this->code)->first();
        $this->judul = $data->judul;
        $this->deskripsi = $data->deskripsi;
        $this->gambar = $data->gambar; 
    }

    public function submit()
    {
        $filepath = null;
        $data_lama = program::where('id', $this->code)->first();

        if($this->gambar != $data_lama->gambar){
        $fileName = time(). '-'. $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $filePath = $data_lama->gambar;
        }

        $data = program::where('id', $this->code)->update([
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'gambar' => $filePath,
        ]);
        return redirect ('/list-program');
    }

    
}
