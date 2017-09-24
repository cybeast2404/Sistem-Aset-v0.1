@extends('layout')
@section('content')
        <div class="container">    
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        <div class="row">                
            <div class="iconmelon" align="center">
            </div>
        </div>
        </br>
        <div class="panel panel-default" >
          <h3 align="center">Daftar admin baru</h3>
            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" 
                action="{{ url('dashboard/register-process') }}" method="POST">
                  

                    <div class="col-xs-12 controls">
                       <label>Nama pengguna</label> 
                        <input id="user" type="text" class="form-control" name="username" value="" placeholder="username">
                    </div>
                    
                    <div class="col-xs-12 controls">
                        <label>kata laluan</label>    
                        <input id="user" type="password" class="form-control" name="password" value="" placeholder="password">
                    </div>                                                                  
                    
                    <div class="col-xs-12 controls">
                        <label>Emel</label>    
                        <input id="user" type="email" class="form-control" name="email" value="" placeholder="Email">
                    </div>                      

                    <div class="col-xs-12 controls">
                        <label>Nombor staff</label>    
                        <input id="user" type="text" class="form-control" name="staff_no" value="" placeholder="Staff number">
                    </div>        

                     <div class="col-xs-12 controls">
                        <label>Nama</label>    
                        <input id="user" type="text" class="form-control" name="name" value="" placeholder="Name">
                    </div>                      
                    
                     <div class="col-xs-12 controls">
                        <label>No.Tel</label>    
                        <input id="user" type="text" class="form-control" name="tel_no" value="" placeholder="Telephone number">

                    </div>
                    <!--csrf token-->           
                    <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}" placeholder="">
                    
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-8 controls">
                            <br>
                             <button type="reset" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-repeat"></i>reset</button>

                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i>Submit</button> &nbsp;
                                                          
                        </div>
                        <div class="col-sm-8 controls">
                        </div>

                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>


@endsection