<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    use HasFactory;
    protected $table = 'branch';
    
    protected $fillable = [
        'nama','alamat','hari1','jam1','hari2','jam2'
        ];
}
