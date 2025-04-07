<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'role',
        'terms_accepted',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
       
        'terms_accepted' => 'boolean',
    ];

    /**
     * Check if user is a trainer.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    } 
  

    /**
     * Check if user is a member.
     *
     * @return bool
     */
    public function isMember()
    {
        return $this->role === 'member';
    }
     
          /**
     * Check if user is a member.
     *
     * @return bool
     */
    public function isTrainer()
    {
        return $this->role === 'trainer';
    }

}