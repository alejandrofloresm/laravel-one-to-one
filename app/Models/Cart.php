<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'order_id'
    ];

    public function order() {
        return $this->belongsTo('App\Models\Order');
    }
}
