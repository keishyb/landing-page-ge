<?php

namespace App\Http\Controllers;

use App\Models\program;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $program = program::first();
        $data = [ 
            'program' => $program,
        ];
        return view('branch', $data);
    }
}
