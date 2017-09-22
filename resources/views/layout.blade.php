<!DOCTYPE HTML>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href=" {{ URL::asset('css/SA_resources/css/bootstrap.min.css') }}" >
  <link rel="stylesheet" href=" {{ URL::asset('css/SA_resources/css/bootstrap-theme-min.css') }}" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link href="{{URL::asset('css/datetimepicker/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
<link href="{{URL::asset('css/datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">

   <link rel="stylesheet" href="{{ URL::asset('css/SA_resources/css/AdminLTE.min.css') }}">

  <!-- AdminLTE Skins. Choose a skin from the css/skins-->


      <script src= "{{ URL::asset('css/SA_resources/js/bootstrap.js') }}" ></script>

      <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/dashboard') }}">Sistem Aset v0.1</a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('dashboard/admin-registration') }}">Daftar admin</a></li>
        <li><a href="{{ url('dashboard/asset-category-registration') }}">Daftar kategori aset</a></li>
        <li><a href="{{ url('dashboard/asset-registration') }}">Daftar aset</a></li>
        <li><a href="{{ url('dashboard/asset-item-registration') }}">Daftar item</a></li>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Senarai<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li></li>
                  <li><a href="{{action('crud_controller1@index')}}">Senarai Aset item</a></li>
                <li><a href="{{action('crud_controller2@index')}}">Senarai Aset</a></li>
                <li><a href="{{action('crud_controller3@index')}}">Senarai aset kategori</a></li>
                <li><a href="{{action('crud_controller4@index')}}">Senarai admin</a></li>
                  <li role="separator" class="divider"></li>
                </ul>
              </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('dashboard/authentication')}}">Selamat kembali, {{Session::get('username')}}</a></li>
        <li><a href="{{ url('logout')}}">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  

<!--Error message will popup here-->    
@extends('message')
@section('message_text')

@yield('content')

@endsection
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src= "{{ URL::asset('css/SA_resources/js/bootstrap.min.js') }}" ></script>
   
</body>
</html>