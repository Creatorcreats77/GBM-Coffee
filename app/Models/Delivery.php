<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $guarded = [
        'id'
    ];
    public function order()
    {
        $this->hasMany(Order::class);
    }
}
