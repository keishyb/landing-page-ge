<?php

namespace App\Livewire\Company;

use App\Models\company;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCompany extends Component
{
    use WithFileUploads;
    public $gambar;

    public function render()
    {
        return view('livewire.company.create-company');
    }
    public function submit()
    {
        $fileName = time() . '-' . $this->gambar->extension();
        $folderPath = 'assets/img';
        $filePath = $this->gambar->storeAs($folderPath, $fileName, 'public');
    
        company::create([
            'gambar' => $filePath,
        ]);
        return redirect ('/list-company');
    }
}
