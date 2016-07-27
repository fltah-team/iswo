@extends("master")
@section("content")
<?php 
        use App\Sponsor ;
        $sponsors = Sponsor::all(); 
        $o_sponsor = Sponsor::find($orphan->sponsor); 
        $status = get_status_by_id($orphan->status);
        
        ?>
<div class="container add-bg">
  <div class="alert alert-info"><h2>بيانات يتيم</h2>
  {!! Form::open(['class'=>'form-inline','role'=>'form' ]) !!}
    <h3>بيانات اليتيم</h3>
    <div class="form-group">
      <label for="status">الحالة  : </label>
      <select class="form-control " name="status">
          @for($i=0; $i <= 2 ; $i++)
            <option value="{{$i+1}}">{{$status[$i]}}</option>
          @endfor
      </select>
      <label for="sponsor">جهة الكفالة  : {{$o_sponsor->name}}</label>
      <select class="form-control " name="sponsor">
          @foreach( $sponsors as $sponsor)
          <option value="{{$sponsor->id}}">{{$sponsor->name}}</option>
          @endforeach
      </select>
    </div>
    <br />
    <div class="form-group">
      <label for="name1">اسم اليتيم: &nbsp;</label>
      {!! Form::text('name1',$orphan->name1,['class'=>'form-control','placeholder'=>'الاسم الأول']) !!}
      {!! Form::text('name2',$orphan->name2,['class'=>'form-control','placeholder'=>'الاسم الثاني']) !!}
      {!! Form::text('name3',$orphan->name3,['class'=>'form-control','placeholder'=>'الاسم الثالث']) !!}
      {!! Form::text('name4',$orphan->name4,['class'=>'form-control','placeholder'=>'الاسم الرابع']) !!}
    </div>
    <br />
    <div class="form-group">
      <label>تاريخ الميلاد : &nbsp;
        {!! Form::text('name4',$orphan->birth_date,['class'=>'form-control']) !!}
      </label>
      <label for="gender">الجنس  : &nbsp;
       <label class="radio-inline" ><input type="radio" name="gender"  value="1">&nbsp; ذكر &nbsp;</label>
       <label class="radio-inline"><input type="radio" name="gender" value="0">&nbsp; أنثى &nbsp;</label>
      </label>
    </div>
    <div class="form-group">
      <label for="name1">اسم والدة اليتيم: &nbsp;</label>
      {!! Form::text('m_name1',$orphan->m_name1,['class'=>'form-control','placeholder'=>'الاسم الأول']) !!}
      {!! Form::text('m_name2',$orphan->m_name2,['class'=>'form-control','placeholder'=>'الاسم الثاني']) !!}
      {!! Form::text('m_name3',$orphan->m_name3,['class'=>'form-control','placeholder'=>'الاسم الثالث']) !!}
      {!! Form::text('m_name4',$orphan->m_name4,['class'=>'form-control','placeholder'=>'الاسم الرابع']) !!}
    </div>
    <div class="form-group">
      <label>تاريخ ميلادها : &nbsp;
        <select class="form-control small-select-5" name="m_d">
          @for($day = 1 ; $day <= 31 ; $day++)
          <option value="{{$day}}">{{$day}}</option>
          @endfor
        </select>
        <select class="form-control small-select-5" name="m_m">
          @for($month = 1 ; $month <= 12 ; $month++)
          <option value="{{$month}}">{{$month}}</option>
          @endfor
        </select>
        <select class="form-control small-select-10" name="m_y">
          @for($year = 1960 ; $year <= 2000 ; $year++)
          <option value="{{$year}}">{{$year}}</option>
          @endfor
        </select>
      </label>
      <label for="s">حالتها الاجتماعية   : &nbsp;</label>
      <select class="form-control" name="m_status">
        <option value="1">متزوجة</option>
      </select>
    </div>
    <div class="form-group">
      <label>تاريخ وفاة والد اليتيم : &nbsp;
        <select class="form-control small-select-5" name="f_d">
          @for($day = 1 ; $day <= 31 ; $day++)
          <option value="{{$day}}">{{$day}}</option>
          @endfor
        </select>
        <select class="form-control small-select-5" name="f_m">
          @for($month = 1 ; $month <= 12 ; $month++)
          <option value="{{$month}}">{{$month}}</option>
          @endfor
        </select>
        <select class="form-control small-select-10" name="f_y">
          @for($year = 1990 ; $year <= date('Y') ; $year++)
          <option value="{{$year}}">{{$year}}</option>
          @endfor
        </select>
      </label>
      <label for="f_dead_cause">سبب الوفاة : &nbsp;</label>
      {!! Form::text('f_dead_cause','',['class'=>'form-control']) !!}
      <label for="f_last_work">عمله السابق &nbsp;</label>
      {!! Form::text('f_last_work','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      <h3>عنوان اليتيم</h3>
      <label for="state">الولاية  : &nbsp;</label>
      <select class="form-control" name="state">
        <option value="1">القضارف</option>
      </select>
      <label for="city">  المدينة/القرية : &nbsp;</label>
      {!! Form::text('city','',['class'=>'form-control']) !!}
      <label for="district"> الحي : &nbsp;</label>
      {!! Form::text('district','',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      <label for="section">  المربع : &nbsp;</label>
      {!! Form::text('section','',['class'=>'form-control']) !!}
      <label for="house_no"> رقم المنزل/معلم بارز : &nbsp;</label>
      {!! Form::text('house_no','',['class'=>'form-control my-width-lg']) !!}
    </div>
    <div class="form-group">
      <label for="tel1">  جوال 1 : &nbsp;</label>
      {!! Form::text('tel1','',['class'=>'form-control']) !!}
      <label for="tel2"> جوال 2 : &nbsp;</label>
      {!! Form::text('tel2','',['class'=>'form-control my-width-lg']) !!}
    </div>
    <h3>بيانات التعليم</h3>
    <div class="form-group">
       <label class="radio-inline"><input type="radio" name="study" value="1">&nbsp; يدرس &nbsp;</label>
       <label class="radio-inline"><input type="radio" name="study" value="2">&nbsp; لا يدرس &nbsp;</label>
       <label for="unstudy_cause"> السبب : &nbsp;</label>
      {!! Form::text('unstudy_cause','',['class'=>'form-control my-width-lg']) !!}
    </div>
    <div class="form-group">
      <label for="school"> اسم المدرسة : &nbsp;</label>
      {!! Form::text('school','',['class'=>'form-control my-width-lg']) !!}
    </div>
    <div class="form-group">
      <label for="level"> المرحلة : &nbsp;</label>
      {!! Form::text('level','',['class'=>'form-control']) !!}
      <label for="class"> الصف : &nbsp;</label>
      {!! Form::text('class','',['class'=>'form-control ']) !!}
      <label for="class"> مستوى حفظ القران : &nbsp;</label>
      <select class="form-control small-select-5" name="q_parts">
          @for($q_parts = 0 ; $q_parts <= 30 ; $q_parts++)
          <option value="{{$q_parts}}">{{$q_parts}}</option>
          @endfor
        </select>
    </div>
    <h3>الحالة الصحية</h3>
    <div class="form-group">
      <label class="radio-inline"><input type="radio" name="health" value="1">&nbsp; جيدة &nbsp;</label>
       <label class="radio-inline"><input type="radio" name="health" value="2">&nbsp; سيئة &nbsp;</label>
       <label for="illness"> نوع المرض : &nbsp;</label>
      {!! Form::text('illness','',['class'=>'form-control my-width-lg']) !!}
    </div>
    <br>
    {!! Form::submit('اضافة اليتيم',['class'=>'btn btn-success btn-large glyphicons glyphicons-plus-sign']) !!}
  {!! Form::close()!!}
    <div class="form-group"></div>
</div>
</div>
<?php 
function get_status_by_id($id){
  $status = [];
  switch ($id) {
    case '1':
      $status = ['مكفول'
                ,'قيد التسويق'
                ,'متوقف'];
      break;
    case '2':
      $status = ['قيد التسويق'
                ,'مكفول'
                ,'متوقف'];
      break;
    case '3':
    
      $status = ['متوقف'
                ,'مكفول'
                ,'قيد التسويق'];
      break;
    default:
      $status = ['مكفول'
                ,'قيد التسويق'
                ,'متوقف'];
      break;
  }
  return $status;
}
?>
@stop