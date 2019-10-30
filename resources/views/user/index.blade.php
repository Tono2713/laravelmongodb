<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
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
          <h4><b>Usuarios</b></h4>
        </div>
        <div class="col-sm-6">
          <a href="{{action('UserController@create')}}" method="get" role="button" class="btn btn-success float-right">
            Agregar
          </a>
        </div>
      </div>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Clave</th>
        <th>Tipo</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->nombre}}</td>
        <td>{{$user->dni}}</td>
        <td>{{$user->clave}}</td>
        <td>{{$user->tipo}}</td>
        <td><a href="{{action('UserController@edit', $user->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('UserController@destroy', $user->id)}}" method="post">
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