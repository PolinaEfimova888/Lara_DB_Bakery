<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class composition extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'ingredient_id', 'quantity'];


    public function ingridients()
    {
        return $this->belongsTo('App\Models\Ingridients');
    }
}
