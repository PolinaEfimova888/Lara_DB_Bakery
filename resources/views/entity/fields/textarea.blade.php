<div class="input-group">
  <div class="input-group-prepend">
    <span row="2" class="input-group-text">{{trans($column_name)}}</span>
  </div>
  <input type ="textarea"  class="form-control" name=" {{$column_name}}" value="{{$entity->$column_name}}">
</div>
