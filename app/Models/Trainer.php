<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends User
{
    // protected $attributes = ['role' => 'trainer'];

    use HasFactory;

    protected $fillable = ['name', 'email', 'specialty', 'role', 'description', 'password', 'terms_accepted'];
   

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}

