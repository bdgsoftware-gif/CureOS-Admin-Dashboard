<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'consultation_id',
        'total_amount',
        'payment_status',
        'pdf_path',
    ];

    protected $casts = [
        'total_amount' => 'decimal:2',
        'payment_status' => 'string', // CONSIDER USING ENUM
    ];

    // Relationships
    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }

    // ADD SCOPE FOR PAYMENT STATUS
    public function scopePaid($query)
    {
        return $query->where('payment_status', 'paid');
    }

    public function scopePending($query)
    {
        return $query->where('payment_status', 'pending');
    }
}
