<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

     protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'appointments', 'id_users', 'id_service')
                    ->withPivot(['appointment_datetime', 'price', 'created_at', 'updated_at']);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'id_users');
    }
}