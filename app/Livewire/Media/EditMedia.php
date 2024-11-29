<?php

namespace App\Livewire\Media;

use App\Models\media;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditMedia extends Component
{
    use WithFileUploads;
    public $code;
    public $gambar;
    public $source;
    public $desc;

    public function render()
    {
        return view('livewire.media.edit-media');
    }

    public function mount()
    {
        $data = media::where('id', $this->code)->first();
        $this->gambar = $data->gambar; 
        $this->source = $data->source;
        $this->desc = $data->desc;
    }

    public function submit()
    {
        $filepath = null;
        $data_lama = media::where('id', $this->code)->first();

        if($this->gambar != $data_lama->gambar){
        $fileName = time(). '-'. $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $filePath = $data_lama->gambar;
        }

        $data = media::where('id', $this->code)->update([
            'gambar' => $filePath,
            'source' => $this->source,
            'desc' => $this->desc,
        ]);
        return redirect ('/list-media');
    }
}
