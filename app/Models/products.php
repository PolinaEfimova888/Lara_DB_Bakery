<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = ['name','price','weight'];


    public function ingridients()
    {
        return $this->hasMany('App\Model\Ingridients');
    }
    public function supply()
    {
        return $this->hasMany('App\Model\Supply');
    }
    public function production()
    {
        return $this->hasMany('App\Model\Production');
    }

    public function categories() {
        return $this->belongsToMany('App\Categories');
        return $this->belongsToMany('App\Models\Products', 'category_product');
    }



}
