<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'service',
        'state',
        'client_id',
        'category',
        'business_name',
        'business_description',
        'basic_requirements',
        'project_manager_id',
        'requirements',
        'contract_unsigned',
        'contract_signed',
        'advance_payment_id',
        'liq_payment_id',
        'notes',
        'referred_payed'
        // Adaugă și alte atribute, dacă este cazul
    ];
}
