<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membre extends User
{
    protected $attributes = ['role' => 'membre'];
}
