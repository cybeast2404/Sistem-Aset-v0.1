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
          <h3 align="center">Ubah data aset item</h3>
            <div class="panel-body" >
                <form class="form-horizontal"  method="POST" action="{{action('crud_controller1@update', $id)}}">
                	{{csrf_field()}}
       				<input name="_method" type="hidden" value="PATCH">
                   <div class="col-xs-12 controls">
                    <label>Aset ID</label>
                    <select class="form-control" name="asset_id" disabled>
                            <!--grab category id from category_asset table--> 
                             
                            <option value='{{$crud->id}}'>{{$crud->id}}</option>
                 
                    </select>
                   </div>
                    <div class="col-xs-6 controls">
                       <label>Nombor aset</label> 
                        <input type="text" class="form-control" name="asset_no" value='{{ $crud->asset_no }}'>
                    </div>

                    
                    
                    <div class="col-xs-6 controls">
                        <label>Lokasi</label>    
                        <input type="text" class="form-control" name="location" value='{{ $crud->location }}'>
                    </div>                                                                  
                    
                    <div class="col-xs-12 controls">
                        <label>Harga</label>    
                        <input type="text" class="form-control" name="price" value='{{ $crud->price}}'>
                    </div>                      

                    <div class="col-xs-12 controls">
                        <label>Tarikh beli</label>    
                        <input type="date" class="form-control" name="date_purchase" value='{{ $crud->date_purchase }}' >
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
    </div>
</div>

@endsection