@extends('layout')
@section('content')
<br>
     <div class="container">        
     <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        
        </br>
        <div class="panel panel-default" >
          <h3 align="center">informasi kategori aset</h3>
            <div class="panel-body" >

                    <div class="col-xs-12 controls">
                       <label>Nama Kategori</label> 
                        <input type="text" class="form-control" name="name" value='{{ $crud->name }}' disabled>
                    </div>

                    <div class="col-xs-12 controls">
                        <label>Penerangan</label>    
                        <textarea type="text" class="form-control" name="description" disabled>{{$crud->description}}</textarea>
                    </div>         
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-7 controls">
                            <br>
                            <a href="{{ url('dashboard/category')}}"><button class="btn btn-primary pull-right">back</button></a>           
                            <br>
                                                
                        </div>
                    </div> 
            </div>                     
        </div>  
    </div>
</div>

@endsection