<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $table = 'program';

    protected $fillable = [
        'title',
        'description',
        'level',
        'price',
        'image_url',
    ];

   
    
}
