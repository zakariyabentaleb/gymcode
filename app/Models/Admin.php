<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    protected $attributes = ['role' => 'admin'];
}



