<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class production extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'product_quantity', 'product_date'];


    public function products()
    {
        return $this->belongsTo('App\Models\Products');
    }
}
