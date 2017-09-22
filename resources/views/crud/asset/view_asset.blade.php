@extends('layout')
@section('content')
<br>
     <div class="container">        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        </br>
        <div class="panel panel-default" >
          <h3 align="center">Informasi aset</h3>
            <div class="panel-body" >
                    
                    <div class="col-xs-12 controls">
                       <label>Nama aset</label> 
                        <input type="text" class="form-control" name="name" value='{{ $crud->name }}' disabled>
                    </div>

                    
                    <div class="col-xs-12 controls">
                        <label>Penerangan</label>    
                        <textarea type="text" class="form-control" name="description" disabled>{{$crud->description}}</textarea>
                    </div>         

                    <div class="col-xs-12 controls">
                        <label>Kategori ID</label> 
                        <p><b>Current Category ID : {{$crud->category_id}}</b></p>   
                        <select class="form-control" name="category_id" disabled>
                            <!--grab category id from category_asset table--> 
                            <option value=''>{{$crud->category_id}}- {{$crud2[0]->name}}</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-8 controls">
                            <br>
                              <a href="{{ url('dashboard/asset')}}"><button class="btn btn-primary pull-right">Back</button></a>                            
                        </div>
                    </div>   
            </div>                     
        </div>  
    </div>
</div>

@endsection