<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = "products";

    public function bills()
    {
        return $this->belongsToMany(Bills::class, 'bill_detail');
    }

    public function types()
    {
        return $this->belongsTo(TypeProducts::class, 'id_type','id');
    }
}
