<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function products() {
        return $this->belongsToMany('App\Products');
        return $this->belongsToMany('App\Models\Products', 'category_product');
    }


}
