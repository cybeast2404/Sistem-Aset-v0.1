@extends('layout')
@section('content')

 
      <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th colspan=7><center>Senarai Admin</center></th>
        <tr>
      <tr>
        <th>Bil</th>
        <th>Nombor staff</th>
        <th>Nama</th>
    

        <th colspan="4"><center>Konfigurasi</center></th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruditems as $post)
      <tr>
        <td>{{$loop->index}}</td>
        <td>{{$post['staff_no']}}</td>
        <td>{{$post['name']}}</td>
        <td>
         <input type='text' name='catid' value="{{$post['id']}}" hidden>
        </td>
        <td><a href="{{action('crud_controller4@edit', $post['id']) }}"class="btn btn-warning">Edit</a> 	
        </td>
        <td>
        <a href="{{action('crud_controller4@show', $post['id'])}}" class="btn btn-success">view</a>
      </td>
         <td>
        <form action="{{action('crud_controller4@destroy', $post['id'])}}" method="post">
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