<?php

namespace App\Livewire\Artis;

use App\Models\artis;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArtis extends Component
{
    use WithFileUploads;
    public $code;
    public $nama;
    public $gambar;
    public function render()
    {
        return view('livewire.artis.edit-artis');
    }

    public function mount()
    {
        $data = artis::where('id', $this->code)->first();
        $this->nama = $data->nama;
        $this->gambar = $data->gambar; 
    }

    public function submit()
    {
        $filepath = null;
        $data_lama = artis::where('id', $this->code)->first();

        if($this->gambar != $data_lama->gambar){
        $fileName = time(). '-'. $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $filePath = $data_lama->gambar;
        }


        $data = artis::where('id', $this->code)->update([
            'nama' => $this->nama,
            'gambar' => $filePath,
        ]);
        return redirect ('/list-artis');
    }
}
