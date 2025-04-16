<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'membre_id', 'trainer_id', 'date', 'time','status'
    ];

    
    public function membre()
    {
        return $this->belongsTo(User::class, 'membre_id');
    }
    
    public function trainer()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }
}
