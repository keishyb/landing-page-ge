<?php

namespace App\Livewire\Tutor;

use App\Models\tutor;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditTutor extends Component
{

    use WithFileUploads;
    public $code;
    public $gambar;
    public $nama;
    public $gelar;

    public function render()
    {
        return view('livewire.tutor.edit-tutor');
    }

    public function mount()
    {
        $data = tutor::where('id', $this->code)->first();
        $this->gambar = $data->gambar;
        $this->nama = $data->nama;
        $this->gelar = $data->gelar;
    }

    public function submit()
    { 
        $filepath = null;
        $data_lama = tutor::where('id', $this->code)->first();

        if($this->gambar != $data_lama->gambar){
        $fileName = time(). '-'. $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $filePath = $data_lama->gambar;
        }
        
        $data = tutor::where('id', $this->code)->update([
            'gambar' => $filePath,
            'nama' => $this->nama,
            'gelar' => $this->gelar,
            
        ]);
        return redirect ('/list-tutor');
    }
}
