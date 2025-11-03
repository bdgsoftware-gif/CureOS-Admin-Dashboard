<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['appointment_id', 'visit_notes'];

    protected $casts = [
        'visit_notes' => 'string',
    ];

    // Relationships
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function prescription()
    {
        return $this->hasOne(Prescription::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    // ADD CONVENIENCE METHODS
    public function hasPrescription()
    {
        return $this->prescription()->exists();
    }

    public function hasInvoice()
    {
        return $this->invoice()->exists();
    }
}
