<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $fillable = ['name','address_id','phone_number_id'];



    public function locations()
{
    return $this->belongsTo('App\Models\Locations');
}


public function phone_numbers()
{
    return $this->belongsTo('App\Models\Phone_numbers');
}


public function products()
{
    return $this->belongsTo('App\Models\Products');
}


public function supply()
{
    return $this->hasMany('App\Model\Supply');
}


}
