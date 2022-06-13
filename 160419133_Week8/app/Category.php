<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public function medicines()
    {
        return $this->hasMany('App\Obat', 'medicine_transaction', 'transaction_id', 'medicine_id')->withPivot('quantity', 'price');
    }
}
