<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'dob',
        'gender',
        'address',
        'created_by',
    ];

    protected $casts = [
        'dob' => 'date', // ADD CAST FOR DATE
    ];

    // Relationships
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function consultations()
    {
        return $this->hasManyThrough(Consultation::class, Appointment::class);
    }

    // ADD ACCESSOR FOR AGE
    public function getAgeAttribute()
    {
        return $this->dob ? $this->dob->age : null;
    }
}
