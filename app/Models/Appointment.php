<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_users',
        'id_service',
        'appointment_datetime',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
}