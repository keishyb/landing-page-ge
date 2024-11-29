<?php

namespace App\Livewire\Jumbotron;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\jumbotron;

class CreateJumbotron extends Component
{
    use WithFileUploads;
    public $banner;
    public $status;

    public function render()
    {
        return view('livewire.jumbotron.create-jumbotron');
    }

    public function submit()
    {
        $fileName = time() . '-' . $this->banner->extension();
        $folderPath = 'assets/img';
        $filePath = $this->banner->storeAs($folderPath, $fileName, 'public');
    
        jumbotron::create([
            'banner' => $filePath,
            'status' => $this->status,
        ]);
        return redirect ('/list-jumbotron');
    }
}
