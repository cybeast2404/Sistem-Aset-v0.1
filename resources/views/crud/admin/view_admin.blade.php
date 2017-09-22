@extends('layout')
@section('content')

 <br>
        <div class="container">    
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        <div class="row">                
            <div class="iconmelon" align="center">
            </div>
        </div>
        </br>
        <div class="panel panel-default" >
          <h3 align="center">Informasi admin</h3>
            <div class="panel-body" >
                                          
                    
                    <div class="col-xs-12 controls">
                        <label>Emel</label>    
                        <input id="user" type="email" class="form-control" name="email" value="{{$crud->email}}"  disabled>
                    </div>                      

                    <div class="col-xs-12 controls">
                        <label>Nombor staff</label>    
                        <input id="user" type="text" class="form-control" name="staff_no" value="{{$crud2[0]->staff_no}}"  disabled>
                    </div>        

                     <div class="col-xs-12 controls">
                        <label>Nama</label>    
                        <input id="user" type="text" class="form-control" name="name" value="{{$crud2[0]->name}}"  disabled>
                    </div>                      
                    
                     <div class="col-xs-12 controls">
                        <label>No.Tel</label>    
                        <input id="user" type="text" class="form-control" name="tel_no" value="{{$crud2[0]->tel_no}}"  disabled>

                    </div>
                    
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-7 controls">
                            <br>
                            <a href="{{ url('dashboard/admin')}}"><button class="btn btn-primary pull-right">Back</button></a>
                                                          
                        </div>
                
                    </div>
            </div>                     
        </div>  
    </div>
</div>


@endsection