<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends EntityController
{
    protected $model = 'App\Models\Categories';

    protected $title = 'Categories';

    protected $routeIndex = 'categories.index';
    protected $routeShow = 'categories.show';
    protected $routeCreate = 'categories.create';
    protected $routeEdit = 'categories.edit';
    protected $routeStore = 'categories.store';
    protected $routeDestroy = 'categories.destroy';

    protected $validationRules = [
        'name' => 'required|max:30',
    ];

    protected $columns = [
        'name' => 'text',

    ];
}
