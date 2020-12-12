<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supply extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','products_id','quantity','price'];

    public function products()
    {
        return $this->belongsTo('App\Models\Products');
    }

    public function clients()
    {
        return $this->belongsTo('App\Models\Clients');
    }
}
