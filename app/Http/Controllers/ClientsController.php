<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends EntityController
{
    protected $model = 'App\Models\Clients';

    protected $title = 'Clients';

    protected $routeIndex = 'clients.index';
    protected $routeShow = 'clients.show';
    protected $routeCreate = 'clients.create';
    protected $routeEdit = 'clients.edit';
    protected $routeStore = 'clients.store';
    protected $routeDestroy = 'clients.destroy';

    protected $validationRules = [
        'name' => 'required|max:50',
        'address_id' => 'required',
        'phone_number_id' => 'required',

    ];

    protected $columns = [
        'name' => 'text',
        'address_id' => 'number',
        'phone_number_id' => 'number'
    ];

}


