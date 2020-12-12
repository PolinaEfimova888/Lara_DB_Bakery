<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredients extends Model
{
    use HasFactory;
    protected $fillable = ['name','quantity','expiration_date','price'];

    public function products()
{
    return $this->belongsTo('App\Models\Products');
}

public function composition()
{
    return $this->hasMany('App\Model\Composition');
}

public function procurement()
{
    return $this->hasMany('App\Model\Procurement');
}


}
