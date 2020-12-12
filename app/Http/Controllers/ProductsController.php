<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends EntityController
{
    protected $model = 'App\Models\Products';

    protected $title = 'Products';

    protected $routeIndex = 'products.index';
    protected $routeShow = 'products.show';
    protected $routeCreate = 'products.create';
    protected $routeEdit = 'products.edit';
    protected $routeStore = 'products.store';
    protected $routeDestroy = 'products.destroy';

    protected $validationRules = [
        'name' => 'required|max:50',
        'price' => 'required',
        'weight' => 'required',
    ];

    protected $columns = [
        'name' => 'text',
        'price' => 'number',
        'weight' => 'decimal'


    ];
}
