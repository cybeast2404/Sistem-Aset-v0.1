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
          <h3 align="center">Ubah informasi admin</h3>
            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data"
                action="{{ action('ProfilesController@update',$id)}}" method="POST">
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="PATCH">

                    <div class="col-xs-12 controls">
                        <label>Nombor staff</label>

                        <input id="user" type="text" class="form-control" name="staff_no" value="{{$crud2[0]->staff_no}}">
                    </div>

                     <div class="col-xs-12 controls">
                        <label>Nama</label>
                        <input id="user" type="text" class="form-control" name="name" value="{{$crud2[0]->name}}">
                    </div>

                     <div class="col-xs-12 controls">
                        <label>No.Tel</label>
                        <input id="user" type="text" class="form-control" name="tel_no" value="{{$crud2[0]->tel_no}}">

                     <!--csrf token-->
                    <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}" placeholder="">

                        <div class="col-sm-8 controls">
                            <br>
                             <button type="reset" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-repeat"></i>reset</button>

                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i>Submit</button> &nbsp;

                        </div>
                    </form>
                </div>
            </div>

    </div>
</div>


@endsection
