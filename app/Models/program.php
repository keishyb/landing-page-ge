<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;
    protected $table = 'program';
    
    protected $fillable = [
        'judul','deskripsi','gambar'
    ];
}
