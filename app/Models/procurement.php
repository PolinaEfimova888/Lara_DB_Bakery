<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procurement extends Model
{
    use HasFactory;
    protected $fillable = ['ingredient_id','quantity','procurement_date'];

    public function ingredients()
    {
        return $this->belongsTo('App\Models\Ingredients');
    }


}
