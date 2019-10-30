<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aulas</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div class="card-header">
      <div class="row">
        <div class="col-sm-6">
          <h4><b>Aulas</b></h4>
        </div>
        <div class="col-sm-6">
          <a method="get" href="{{action('RoomController@create')}}" role="button" class="btn btn-success float-right">
            Agregar
          </a>
        </div>
      </div>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Aula</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($rooms as $room)
      <tr>
        <td>{{$room->id}}</td>
        <td>{{$room->numero}}</td>
        <td><a method="get" href="{{action('RoomController@edit', $room->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('RoomController@destroy', $room->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>