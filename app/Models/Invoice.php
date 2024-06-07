<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'po_number',
        'invoice_no',
        'date',
        'due_date',
        'enable_tax',
        'recurring_invoice',
        'recurring_period',
        'billing_address',
        'shipping_address',
        'taxable_amount',
        'round_off',
        'total_amount',
        'signature',
        'terms_conditions',
        'notes',
    ];
}
