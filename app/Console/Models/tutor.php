<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutor extends Model
{
    use HasFactory;
    protected $table = 'tutor';
    
    protected $fillable = [
        'gambar','nama','gelar'
    ];
}
