<div class="input-group">


  <div class="col-6">
    <span class="input-group-text">{{trans($column_name)}}</span>
  </div>

  <input type ="decimal" class="form-control" name=" {{$column_name}}" value="{{$entity->$column_name}}">

  </div>