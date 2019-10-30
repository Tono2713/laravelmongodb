<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Matriculas</title>
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
          <h4><b>Matriculas</b></h4>
        </div>
        <div class="col-sm-6">
          <a method="get" href="{{action('MatriculaController@create')}}" role="button" class="btn btn-success float-right">
            Agregar
          </a>
        </div>
      </div>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Curso</th>
        <th>Estudiante</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($matriculas as $matricula)
      <tr>
        <td>{{$matricula->id}}</td>
        <td>
          @foreach ($cursos as $curso)
           @if($matricula->curso == $curso->nrc) {{$curso->nombre}}  @endif
          @endforeach 
        </td>
        <td>
          @foreach ($users as $user)
           @if($matricula->estudiante == $user->dni) {{$user->nombre}}  @endif
          @endforeach 
        </td>
        <td><a method="get" href="{{action('MatriculaController@edit', $matricula->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('MatriculaController@destroy', $matricula->id)}}" method="post">
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