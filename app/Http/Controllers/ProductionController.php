<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends EntityController
{

    protected $model = 'App\Models\Production';

    protected $title = 'Production';

    protected $routeIndex = 'production.index';
    protected $routeShow = 'production.show';
    protected $routeCreate = 'production.create';
    protected $routeEdit = 'production.edit';
    protected $routeStore = 'production.store';
    protected $routeDestroy = 'production.destroy';

    protected $validationRules = [
        'product_id' => 'required',
        'product_quantity' => 'required',
        'product_date' => 'required',
    ];

    protected $columns = [
        'product_id' => 'number',
        'product_quantity' => 'number',
        'product_date' => 'data',


    ];
}
