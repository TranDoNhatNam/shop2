<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    //
    protected $table = "bills";

    public function products()
    {
        return $this->belongsToMany(Product::class, 'bill_detail');
    }
}
