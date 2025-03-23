<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entraineur extends User
{
    protected $attributes = ['role' => 'trainer'];
}
