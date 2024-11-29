<?php

namespace App\Livewire\Branch;


use App\Models\branch;
use Livewire\Component;

class CreateBranch extends Component
{
    public $nama;
    public $alamat;
    public $hari1;
    public $jam1;
    public $hari2;
    public $jam2;

    public function render()
    {
        return view('livewire.branch.create-branch');
    }

    public function submit()
    {
        branch::create([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'hari1' => $this->hari1,
            'jam1' => $this->jam1,
            'hari2' => $this->hari2,
            'jam2' => $this->jam2,
        ]);
        return redirect ('/list-branch');
    }

}

