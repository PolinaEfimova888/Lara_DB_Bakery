<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    use HasFactory;
    protected $fillable = ['address'];


    public function clients()
    {
        return $this->hasOne('App\Models\Clients');
    }
}
