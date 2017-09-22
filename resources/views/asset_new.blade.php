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
          <h3 align="center">Daftar aset baru</h3>
            <div class="panel-body" >

                <form name="form" class="form-horizontal" action="{{ url('dashboard/register-new-asset')}}"method="POST">
                   
                    <div class="col-xs-12 controls">
                       <label>Nama aset</label> 
                        <input id="user" type="text" class="form-control" name="asset_name" placeholder="Asset name">
                    </div>
                    
                    <div class="col-xs-12 controls">
                        <label>Penerangan</label>    
                        <textarea type="text" class="form-control" name="description" placeholder="Description" ></textarea>
                    </div>                                                                  
                    
                    <div class="col-xs-12 controls">
                        <label>Kategori ID</label>    
                        <select class="form-control" name="category_id">
                            <option>Select your category</option>
                            <!--grab category id from category_asset table--> 
                             @foreach($query as $query)
                            <option value='{{$query->id}}'>{{$query->id}}- {{$query->name}}</option>
                             @endforeach 
                            </select>

                    </div> 
                    <!--csrf token-->                    
                    <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-8 controls">
                            <br>
                             <button type="reset" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-repeat"></i>reset</button>

                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i>Register</button> &nbsp;
                                                          
                        </div>
                        <div class="col-sm-8 controls">
                        </div>
</div>
                    </div>

                </form>     

            </div>                     
        </div>  
    </div>
</div>

@endsection