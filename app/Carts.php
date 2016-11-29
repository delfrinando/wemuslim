<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table = 'carts';

    protected $fillable = array('user_id', 'product_id', 'amount', 'total');

    public function Products()
    {

        return $this->belongsTo('Products', 'product_id');

    }
}
