<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artis extends Model
{
    use HasFactory;
    protected $table = 'artis';
    
    protected $fillable = [
        'gambar','nama'
        ];
}
