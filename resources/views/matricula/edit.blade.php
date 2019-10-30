<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Matricula</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Actualizar Matricula</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('MatriculaController@update', $id)}}">
        @csrf
       
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="curso">Curso:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="curso">
                    @foreach ($cursos as $curso)
                    <option value="{{$curso->nrc}}" @if($curso->nrc == $matricula->curso) selected='selected' @endif > {{$curso->nombre}} </option>
                    @endforeach 
              </select>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="estudiante">Estudiante:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="estudiante">
                    @foreach ($users as $user)
                    @if($user->tipo == 'Estudiante') <option value="{{$user->dni}}" @if($user->dni == $matricula->estudiante) selected='selected' @endif > {{$user->nombre}} </option> @endif
                    @endforeach 
              </select>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>