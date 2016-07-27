<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{ isset($title) ? $title : 'النظام الالكتروني' }}</title>
  <!-- IE Compatipility Meta -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- First Mobile Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}"></link>
  <link rel="stylesheet" href="{{asset('css/style.css')}}"></link>
  
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-static-top navbar-fixed-top">
  <div class="container">
      <ul class="nav navbar-nav navbar-left menu">
        <li><a href="home" class="header-txt"><span class="glyphicon glyphicon-home"></span>  الصفحة الرئيسية</a></li>
        <li class="dropdown">
          <a href="orphan" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الأيتام <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="orphan/create"><span class="glyphicon glyphicon-plus"></span> اضافة يتيم</a></li>
            <li><a href="orphan"><span class="glyphicon glyphicon-list-alt"></span> عرض الكل</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="sponsor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الطلاب<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="orphan/create"><span class="glyphicon glyphicon-plus"></span> اضافة طالب</a></li>
            <li><a href="orphan"><span class="glyphicon glyphicon-list-alt"></span> عرض الكل</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="sponsor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الدعاة<span class="caret"></span></a>
        </li>
        <li class="dropdown">
          <a href="sponsor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الاسر<span class="caret"></span></a>
        </li>
        <li class="dropdown">
          <a href="sponsor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">جهات الكفالة<span class="caret"></span></a>
        </li>
      </ul>


      <ul class="nav navbar-nav navbar-right menu">
        <li class="dropdown">
          <a href="sponsor" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> المستخدمين<span class="caret"></span></a>
        </li>
        <li><a href="/" class="header-txt"><span class="glyphicon glyphicon-log-out"></span>  تسجيل خروج</a></li>
      </ul>
  </div>
</nav>

@yield("content")

<!--scip src"{{asset('js/bootstrap-arabic.js')}}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->
</body>
</html>
