<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = ['invoice_id', 'service_description', 'fee'];

    protected $casts = [
        'fee' => 'decimal:2', // ADD CAST FOR MONEY
    ];

    // Relationships
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
