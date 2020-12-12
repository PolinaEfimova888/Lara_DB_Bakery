<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientsController extends EntityController
{
    protected $model = 'App\Models\Ingredients';

    protected $title = 'Ingredients';

    protected $routeIndex = 'ingredients.index';
    protected $routeShow = 'ingredients.show';
    protected $routeCreate = 'ingredients.create';
    protected $routeEdit = 'ingredients.edit';
    protected $routeStore = 'ingredients.store';
    protected $routeDestroy = 'ingredients.destroy';

    protected $validationRules = [
        'name' => 'required|max:30',
        'quantity' => 'required',
        'expiration_date' => 'required',
        'price' => 'required',
        
    ];

    protected $columns = [
        'name' => 'text',
        'quantity' => 'number',
        'expiration_date' => 'data',
        'price' => 'decimal'

    ];
}
