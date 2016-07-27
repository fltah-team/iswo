@extends("master")
@section("content")
<div class="container add-bg">
@if(isset($sponsor))
  <div class="alert alert-info"><h2>بيانات جهة كفالة</h2>
  {!! Form::open(['class'=>'form-inline','role'=>'form',"url"=>"sponsor/$sponsor->id","method"=>"patch" ]) !!}
    <div class="form-group">
      <label for="name1">اسم جهة الكفالة: &nbsp;</label>
      <input class="form-control" name="name" value="{{$sponsor->name}}" >
    </div>
    <button type="submit" class="btn btn-success" aria-label="Left Align">
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  تعديل  
    </button>
 {!! Form::close()!!}
    
 {!! Form::open(['class'=>'form-inline','role'=>'form',"url"=>"sponsor/$sponsor->id","method"=>"delete"]) !!}
    <button type="submit" class="btn btn-danger" aria-label="Left Align">
      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>  حذف  
    </button>
 {!! Form::close()!!}

</div>
@endif
@if(!isset($sponsor))
<div class="alert alert-warning">
    <h2>تعذر ايجاد جهة كفالة</h2>
</div>
@endif
</div>
@stop