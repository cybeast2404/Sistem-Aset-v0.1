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
          <h3 align="center">Daftar item baru</h3>
            <div class="panel-body" >

                <form class="form-horizontal"  method="POST" action="{{ url('dashboard/register-new-asset-item') }}">
                   <div class="col-xs-12 controls">
                    <label>Asset ID</label>
                    <select class="form-control" name="asset_id">
                         <option>Select your category</option>
                            <!--grab category id from category_asset table--> 
                             @foreach($query as $query)
                            <option value='{{$query->id}}'>{{$query->id}}- {{$query->name}}</option>
                             @endforeach 
                    </select>
                   </div>
                    <div class="col-xs-6 controls">
                       <label>Nombor aset</label> 
                        <input type="text" class="form-control" name="asset_no" placeholder="Asset number">
                    </div>

                    
                    
                    <div class="col-xs-6 controls">
                        <label>Lokasi</label>    
                        <input type="text" class="form-control" name="location" placeholder="Location" >
                    </div>                                                                  
                    
                    <div class="col-xs-12 controls">
                        <label>Harga</label>    
                        <input type="text" class="form-control" name="price" placeholder="Price">
                    </div>                      

                    <div class="col-xs-12 controls">
                        <label>Tarikh beli</label>    
                        <input type="date" class="form-control" name="date_purchase" >
                    </div>                      
                     <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
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