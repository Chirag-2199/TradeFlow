<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name', 'category', 'quantity', 'supplier', 'purchase_date', 'unit_price', 'description'
    ];
}
