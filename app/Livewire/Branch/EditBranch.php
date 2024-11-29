<?php

namespace App\Livewire\Branch;

use App\Models\branch;
use Livewire\Component;

class EditBranch extends Component
{

    public $code;
    public $nama;
    public $alamat;
    public $hari1;
    public $jam1;
    public $hari2;
    public $jam2;

    public function render()
    {
        return view('livewire.branch.edit-branch');
    }

    public function mount()
    {
        $data = branch::where('id', $this->code)->first();
        $this->nama = $data->nama;
        $this->alamat = $data->alamat;
        $this->hari1 = $data->hari1;
        $this->jam1 = $data->jam1;
        $this->hari2 = $data->hari2;
        $this->jam2 = $data->jam2;
    }

    public function submit()
    {
        branch::where('id', $this->code)->update([
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
