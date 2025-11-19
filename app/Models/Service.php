<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'id_categories');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'appointments', 'id_service', 'id_users')
                    ->withPivot(['appointment_datetime', 'price', 'created_at', 'updated_at']);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'id_service');
    }
}
