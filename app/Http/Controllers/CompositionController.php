<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompositionController extends EntityController
{
    protected $model = 'App\Models\Composition';

    protected $title = 'Composition';

    protected $routeIndex = 'composition.index';
    protected $routeShow = 'composition.show';
    protected $routeCreate = 'composition.create';
    protected $routeEdit = 'composition.edit';
    protected $routeStore = 'composition.store';
    protected $routeDestroy = 'composition.destroy';


    protected $validationRules = [
        'product_id' => 'required',
        'ingredient_id' => 'required',
        'quantity' => 'required',
        
    ];

    protected $columns = [
        'product_id' => 'number',
        'ingredient_id' => 'number',
        'quantity' => 'number',


    ];
}
