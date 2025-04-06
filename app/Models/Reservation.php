<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'membre_id', 'trainer_id', 'date', 'time', 'price', 'status'
    ];

    
    public function user()
    {
        return $this->belongsTo(Membre::class);
    }

   
    public function coach()
    {
        return $this->belongsTo(Trainer::class);
    }
}
