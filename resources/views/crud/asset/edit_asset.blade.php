@extends('layout')
@section('content')
 @if(session('statement'))
 
          <div class="alert alert-success" role="alert">
            <p align="center">
      {{session('statement')}}
      </div>
        </p>
        @endif
         <br>
<br>
     <div class="container">        
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
        <div class="row">                
            <div class="iconmelon" align="center"> 
              
            </div>
        </div>
        </br>
        <div class="panel panel-default" >
          <h3 align="center">Ubah data aset</h3>
            <div class="panel-body" >
                <form class="form-horizontal"  method="POST" action="{{action('crud_controller2@update', $id)}}">
                	{{csrf_field()}}
       				<input name="_method" type="hidden" value="PATCH">
                    
                    <div class="col-xs-12 controls">
                       <label>Nama aset</label> 
                        <input type="text" class="form-control" name="name" value='{{ $crud->name }}'>
                    </div>

                    
                    <div class="col-xs-12 controls">
                        <label>Penerangan</label>    
                        <textarea type="text" class="form-control" name="description">{{$crud->description}}</textarea>
                    </div>         

                    <div class="col-xs-12 controls">
                        <label>Kategori ID</label> 
                        <p><b>Kategori ID terkini : {{$crud->category_id}} -  {{$crud3[0]->name}}<!--other query--></b></p>   
                        <select class="form-control" name="category_id">
                            <!--grab category id from category_asset table--> 
                            <option value ="0">Select your category</option>
                            @foreach($crud2 as $query)
                            <option value='{{$query->id}}'>{{$query->id}}- {{$query->name}}</option>
                             @endforeach 
                            </select>
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