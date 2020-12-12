<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationsController extends EntityController
{
    protected $model = 'App\Models\Locations';

    protected $title = 'Location';

    protected $routeIndex = 'locations.index';
    protected $routeShow = 'locations.show';
    protected $routeCreate = 'locations.create';
    protected $routeEdit = 'locations.edit';
    protected $routeStore = 'locations.store';
    protected $routeDestroy = 'locations.destroy';

    protected $validationRules = [
        'address' => 'required|max:50',
    ];

    protected $columns = [
        'address' => 'text',


    ];
}
