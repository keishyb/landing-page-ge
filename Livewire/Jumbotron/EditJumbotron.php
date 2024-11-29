<?php

namespace App\Livewire\Jumbotron;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\jumbotron;

class EditJumbotron extends Component
{

    use WithFileUploads;
    public $code;
    public $banner;
    public $status;

    public function render()
    {
        return view('livewire.jumbotron.edit-jumbotron');
    }

    
    public function mount()
    {
        $data = jumbotron::where('id', $this->code)->first();
        $this->banner = $data->banner; 
        $this->status = $data->status;
    }

    public function submit()
    {
        $filepath = null;
        $data_lama = jumbotron::where('id', $this->code)->first();

        if($this->banner != $data_lama->banner){
        $fileName = time(). '-'. $this->banner->extension();
        $folderPath = 'assets/img';
        $filePath = $this->banner->storeAs($folderPath, $fileName, 'public');
        }else{
            $filePath = $data_lama->banner;
        }
        
        $data = jumbotron::where('id', $this->code)->update([
            'banner' => $filePath,
            'status' => $this->status,
        ]);
        return redirect ('/list-jumbotron');
    }
}
