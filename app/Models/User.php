<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $fillable = [
        'name', 'email', 'phone', 'password', 'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relationships
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class, 'created_by');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
}
