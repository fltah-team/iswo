@extends("master")
@section("content")
<div class="container">
  <div class="">
      <table class="table table-bordered table-hover">
          <tr>
              <td>الرقم</td>
              <td>الاسم</td>
              <td>عرض</td>
          </tr>
          @foreach($sponsors as $sponsor)
          <tr>
              <td>{{$sponsor->id}}</td>
              <td>{{$sponsor->name}}</td>
              <td class="show-li"><a class="btn show-link" href="sponsor/{{$sponsor->id}}" ><span class="glyphicon glyphicon-menu-hamburger"></span>  عرض </a></td>
          </tr>
          @endforeach
      </table>
  </div>
  <div class="row text-center">
    {!! $sponsors->render() !!}
  </div>
</div>

@stop