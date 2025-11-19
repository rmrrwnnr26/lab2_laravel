<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

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