@extends('layout')
@section('content')

 @if(session('statement'))
 
          <div class="alert alert-danger" role="alert">
            <p align="center">
      {{session('statement')}}
      </div>
        </p>
        @endif
<br>
        <div class="container">    
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        <div class="row">                
            <div class="iconmelon" align="center">
            </div>
        </div>
        </br>
        <div class="panel panel-default" >
          <h3 align="center">Tukar maklumat pengesahan</h3>
            <div class="panel-body" >

                 <form class="form-horizontal"  method="POST" enctype="multipart/form-data" 
                  action="{{ action('modification@update',$id)}}">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PATCH">
                    
                    <div class="col-xs-12 controls">
                       <label>Nama pengguna</label> 
                        <input type="text" class="form-control" name="username" value='{{ $users->username }}'>
                    </div>

                    
                    <div class="col-xs-12 controls">
                        <label>Kata laluan baru</label>    
                        <input type="password" class="form-control" name="password" >
                    </div>         

                     <div class="col-xs-12 controls">
                        <label>Pengesahan kata laluan</label>    
                        <input type="password" class="form-control" name="password_2" >
                    </div>
                    
                     <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-8 controls">
                            <br>
                             <button type="reset" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-repeat"></i>Reset
                             </button></a>

                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i>Update</button> &nbsp;
                                                          
                        </div>
                        <div class="col-sm-8 controls">
                        </div>

                    </div>

                </form>     


	</div>
	</div>

@endsection