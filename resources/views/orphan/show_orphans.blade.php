@extends("master")
@section("content")
<div class="container">
  <div class="">
      <table class="table table-bordered table-hover">
          <tr>
              <td>الرقم</td>
              <td>الاسم الاول</td>
              <td>الاسم الثاني</td>
              <td>الاسم الثالث</td>
              <td>الاسم الرابع</td>
              <td>عرض</td>
          </tr>
          @foreach($orphans as $orphan)
          <tr>
              <td>{{$orphan->id}}</td>
              <td>{{$orphan->name1}}</td>
              <td>{{$orphan->name2}}</td>
              <td>{{$orphan->name3}}</td>
              <td>{{$orphan->name4}}</td>
              <td class="show-li"><a class="btn show-link" href="orphan/{{$orphan->id}}" ><span class="glyphicon glyphicon-menu-hamburger"></span>  عرض </a></td>
          </tr>
          @endforeach
      </table>
  </div>
</div>

@stop