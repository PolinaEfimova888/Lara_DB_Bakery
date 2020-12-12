<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

abstract class EntityController extends Controller
{
    protected $model;

    protected function getModel()
    {
        return $this->model;
    }

    protected $title;

    protected function getTitle()
    {
        return $this->title;
    }

    protected $routeIndex;
    protected $routeShow;
    protected $routeCreate;
    protected $routeEdit;

    protected $validationRules = [
        'name' => 'required',
    ];

    protected function getValidationRules(Request $request)
    {
        return $this->validationRules;
    }

    protected $columns = [
        'name' => 'text',
    ];

    protected function getColumns(Request $request)
    {
        return $this->columns;
    }

    protected function getIndexColumns(Request $request)
    {
        return $this->getColumns($request);
    }

    protected function getCreateColumns(Request $request)
    {
        return $this->getColumns($request);
    }

    protected function getShowColumns(Request $request)
    {
        return $this->getColumns($request);
    }

    protected function getEditColumns(Request $request)
    {
        return $this->getColumns($request);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $this->getTitle();
        $routeIndex = $this->routeIndex;
        $routeShow = $this->routeShow;
        $routeCreate = $this->routeCreate;
        $routeEdit = $this->routeEdit;
  

        $model = $this->getModel();

        $entities = $model::paginate(30);

        $columns = $this->getIndexColumns($request);

        return view('entity.index', compact('entities', 'columns', 'title', 'routeIndex', 'routeShow', 'routeCreate', 'routeEdit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $routeIndex = $this->routeIndex;
        $routeShow = $this->routeShow;
        $routeCreate = $this->routeCreate;
        $routeEdit = $this->routeEdit;
        $routeDestroy = $this->routeDestroy;
        $routeStore = $this->routeStore;


        $title = $this->getTitle();

        $model = $this->getModel();

        $entity = new $model;

        $columns = $this->getCreateColumns($request);


        return view('entity.create', compact('entity', 'columns', 'title','routeIndex', 'routeShow', 'routeCreate', 'routeEdit', 'routeDestroy','routeStore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules($request));
        $data = $request->all();

        $model = $this->getModel();
        $entity = $model::create($data);

        return redirect(route($this->routeIndex));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $title = $this->getTitle();
        $routeIndex = $this->routeIndex;
        $routeShow = $this->routeShow;
        $routeCreate = $this->routeCreate;
        $routeEdit = $this->routeEdit;
        $routeDestroy = $this->routeDestroy;
        $routeStore = $this->routeStore;

        $model = $this->getModel();

        $entity = $model::find($id);

        $columns = $this->getShowColumns($request);

        return view('entity.show', compact('entity', 'columns', 'title','routeIndex', 'routeShow', 'routeCreate', 'routeEdit', 'routeDestroy','routeStore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $title = $this->getTitle();
        $routeIndex = $this->routeIndex;
        $routeShow = $this->routeShow;
        $routeCreate = $this->routeCreate;
        $routeEdit = $this->routeEdit;
        $routeDestroy = $this->routeDestroy;
        $routeStore = $this->routeStore;

        $model = $this->getModel();

        $entity = $model::find($id);

        $columns = $this->getEditColumns($request);

        return view('entity.edit', compact('entity', 'columns', 'title','routeIndex', 'routeShow', 'routeCreate', 'routeEdit', 'routeDestroy','routeStore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = $this->getModel();

        $entity = $model::find($id);

        $request->validate($this->getValidationRules($request));

        $entity->update($request->all());

        // return redirect(route($this->routeShow, $entity->id));
        return redirect(route($this->routeIndex));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $model = $this->getModel();

        $entity = $model::find($id);
        $entity->delete();

        return redirect(route($this->routeIndex));
    }
}
