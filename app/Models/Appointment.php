<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_time',
        'status',
    ];

    protected $casts = [
        'appointment_time' => 'datetime',
        'status' => 'string', // CONSIDER USING ENUM
    ];

    // Relationships
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function consultation()
    {
        return $this->hasOne(Consultation::class);
    }

    // ADD SCOPES FOR COMMON QUERIES
    public function scopeUpcoming($query)
    {
        return $query->where('appointment_time', '>=', now())
            ->where('status', 'scheduled');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeForDoctor($query, $doctorId)
    {
        return $query->where('doctor_id', $doctorId);
    }

    public function scopeForPatient($query, $patientId)
    {
        return $query->where('patient_id', $patientId);
    }

    // ADD CONVENIENCE METHODS
    public function hasConsultation()
    {
        return $this->consultation()->exists();
    }

    public function isUpcoming()
    {
        return $this->appointment_time >= now() && $this->status === 'scheduled';
    }
}
