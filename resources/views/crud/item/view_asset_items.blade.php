@extends('layout')
@section('content')
<br>
     <div class="container">        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        </br>
        <div class="panel panel-default" >
          <h3 align="center">Informasi data item</h3>
            <div class="panel-body" >
                   <div class="col-xs-12 controls">
                    <label>Aset ID</label>
                    <select class="form-control" name="asset_id" disabled>
                            <!--grab category id from category_asset table-->      
                            <option value='{{$crud->id}}'>{{$crud->id}}</option>
                    </select>
                   </div>
                    <div class="col-xs-6 controls">
                       <label>Nombor aset</label> 
                        <input type="text" class="form-control" name="asset_no" value='{{ $crud->asset_no }}' disabled>
                    </div>

                    
                    
                    <div class="col-xs-6 controls">
                        <label>Lokasi</label>    
                        <input type="text" class="form-control" name="location" value='{{ $crud->location }}' disabled>
                    </div>                                                                  
                    
                    <div class="col-xs-12 controls">
                        <label>Harga</label>    
                        <input type="text" class="form-control" name="price" value='{{ $crud->price}}' disabled>
                    </div>                      

                    <div class="col-xs-12 controls">
                        <label>Tarikh beli</label>    
                        <input type="date" class="form-control" name="date_purchase" value='{{ $crud->date_purchase }}' disabled >
                    </div>                      
                    
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-8 controls">
                            <br>
                             <a href="{{ url('dashboard/item')}}"><button class="btn btn-primary pull-right">Kembali</button></a>
                        </div>
                    </div>
            </div>                     
        </div>  
    </div>
</div>

@endsection