<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category_productController extends EntityController
{
    protected $model = 'App\Models\Category_product';

    protected $title = 'Category of product';

    protected $routeIndex = 'cproduct.index';
    protected $routeShow = 'cproduct.show';
    protected $routeCreate = 'cproduct.create';
    protected $routeEdit = 'cproduct.edit';
    protected $routeStore = 'cproduct.store';
    protected $routeDestroy = 'cproduct.destroy';

    protected $validationRules = [
        'category_id' => 'required',
        'product_id' => 'required',
    ];

    

    protected $columns = [
        'category_id' => 'number',
        'product_id' => 'number'

    ];
}