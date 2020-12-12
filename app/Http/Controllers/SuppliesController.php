<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliesController extends EntityController
{
    protected $model = 'App\Models\Supply';

    protected $title = 'Supplies';

    protected $routeIndex = 'supplies.index';
    protected $routeShow = 'supplies.show';
    protected $routeCreate = 'supplies.create';
    protected $routeEdit = 'supplies.edit';
    protected $routeStore = 'supplies.store';
    protected $routeDestroy = 'supplies.destroy';

    protected $validationRules = [
        'client_id' => 'required',
        'products_id' => 'required',
        'quantity' => 'required',
        'price' => 'required',

    ];

    protected $columns = [
        'client_id' => 'number',
        'products_id' => 'number',
        'quantity' => 'number',
        'price' => 'decimal',
    ];
}
