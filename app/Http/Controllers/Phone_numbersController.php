<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    class Phone_numbersController extends EntityController
    {
        protected $model = 'App\Models\phone_numbers';
    
        protected $title = 'Phone numbers';
    
        protected $routeIndex = 'phone.index';
        protected $routeShow = 'phone.show';
        protected $routeCreate = 'phone.create';
        protected $routeEdit = 'phone.edit';
        protected $routeStore = 'phone.store';
        protected $routeDestroy = 'phone.destroy';
    
        protected $validationRules = [
            'phone_number' => 'required|max:20',
        ];
    
        protected $columns = [
            'phone_number' => 'text'
        ];
    
    }

