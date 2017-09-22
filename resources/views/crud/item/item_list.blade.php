@extends('layout')
@section('content')

 
      <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th colspan=7><center>Senarai Aset Item</center></th>
        <tr>
      <tr>
        <th>Bil</th>
        <th>Nombor Aset</th>
        <th>Lokasi</th>

        <th colspan=4><center>Konfigurasi</center></th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruditems as $post)
      <tr>
        <td>{{$loop->index}} </td>
        <td>{{$post['asset_no']}}</td>
        <td>{{$post['location']}}</td>

        <td><input type='text' name='id' value="{{$post['id']}}" hidden></td>

        <td><a href="{{action('crud_controller1@edit', $post['id'])}}" class="btn btn-warning">Edit</a> 	
        </td>
        <td><a href="{{action('crud_controller1@show', $post['id'])}}" class="btn btn-success">view</a></td>
         <td>
        <form action="{{action('crud_controller1@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div align="center">
  	{{$cruditems->links()}}
 </div>
  </div>
@endsection