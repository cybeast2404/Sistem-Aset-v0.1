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
          <h3 align="center">Daftar kategori aset</h3>
            <div class="panel-body" >

                <form action="{{ url('dashboard/register-category')}}" class="form-horizontal" enctype="multipart/form-data"  method="POST">
                   
                    <div class="col-xs-12 controls">
                       <label>Jenis Kategori</label> 
                        <input type="text" class="form-control" name="category_type" placeholder="Category type">
                    </div>
                    
                    <div class="col-xs-12 controls">
                        <label>Penerangan</label>     

                        <textarea type="text" class="form-control" name="description" value="" placeholder="Description"></textarea>
                    </div> 

                     <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">                                                                 
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-8 controls">
                            <br>
                             <button type="reset" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-repeat"></i>reset</button>

                            <button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i>Submit</button>
                                                          
                        </div>
                    </div>
                </form>     
            </div>                     
        </div>  
    </div>
</div>


@endsection