<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'Products';

    protected $fillable = array('title', 'isbn', 'cover', 'price', 'author_id');

    public function Categories()
    {

        return $this->belongsTo('Categories');

    }
}
