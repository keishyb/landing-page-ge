<?php

namespace App\Livewire\Testi;

use Livewire\Component;
use App\Models\testimoni;
use Livewire\WithFileUploads;

class EditTestimoni extends Component
{
    use WithFileUploads;
    public $code;
    public $desc;
    public $nama;
    public $asal_pt;
    public $gambar;

    public function render()
    {
        return view('livewire.testi.edit-testimoni');
    }

    public function mount()
    {
        $data = testimoni::where('id', $this->code)->first();
        $this->desc = $data->desc; 
        $this->nama = $data->nama;
        $this->asal_pt = $data->asal_pt;
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

        $data = testimoni::where('id', $this->code)->update([
            'desc' => $this->desc,
            'nama' => $this->nama,
            'asal_pt' => $this->asal_pt,
            'gambar' => $filePath,
            
        ]);
        return redirect ('/list-testimoni');
    }
}
