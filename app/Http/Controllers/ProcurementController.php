<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcurementController extends EntityController
{
    protected $model = 'App\Models\Procurement';

    protected $title = 'Procurements';

    protected $routeIndex = 'procurement.index';
    protected $routeShow = 'procurement.show';
    protected $routeCreate = 'procurement.create';
    protected $routeEdit = 'procurement.edit';
    protected $routeStore = 'procurement.store';
    protected $routeDestroy = 'procurement.destroy';

    protected $validationRules = [
        'ingredient_id' => 'required',
        'quantity' => 'required',
        'procurement_date' => 'required',
 
    ];

    protected $columns = [
        'ingredient_id' => 'number',
        'quantity' => 'number',
        'procurement_date' => 'data',


    ];
}
