@extends("master")
@section("content")
<div class="container add-bg">
  <div class="alert alert-info"><h2>اضافة جهة كفالة جديدة</h2></div>
  {!! Form::open(['class'=>'form-inline','role'=>'form' ]) !!}
    {!! csrf_field() !!}
    <h3></h3>
    <div class="form-group">
      <label for="name1">اسم جهة الكفالة: &nbsp;</label>
      {!! Form::text('name','',['class'=>'form-control','placeholder'=>'الاسم ']) !!}
    </div>
    <br />
    <button type="submit" class="btn btn-success" aria-label="Left Align">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  اضافة  
    </button>
  {!! Form::close()!!}
    <div class="form-group"></div>
</div>
@stop