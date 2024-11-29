<?php

namespace App\Livewire\Company;

use App\Models\company;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCompany extends Component
{
    use WithFileUploads;
    public $code;
    public $gambar;

    public function render()
    {
        return view('livewire.company.edit-company');
    }

    public function mount()
    {
        $data = company::where('id', $this->code)->first();
        $this->gambar = $data->gambar; 
    }

    public function submit()
    {
        $filepath = null;
        $data_lama = company::where('id', $this->code)->first();

        if($this->gambar != $data_lama->gambar){
        $fileName = time(). '-'. $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
        }else{
            $filePath = $data_lama->gambar;
        }

        $data = company::where('id', $this->code)->update([
            'gambar' => $filePath,
        ]);
        return redirect ('/list-company');
    }
}
