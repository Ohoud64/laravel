<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'costumer_id',
        'products_id',
        'status',
    ];
}
