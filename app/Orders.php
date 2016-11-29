<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';

    protected $fillable = array('user_id', 'address', 'total');

    public function orderItems()
    {
        return $this->belongsToMany('Products')->withPivot('amount', 'total');
    }
}
