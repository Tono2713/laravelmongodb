<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Usuario</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Actualizar Usuario</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('UserController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{$user->nombre}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="dni">DNI:</label>
            <input type="text" class="form-control" name="dni" value="{{$user->dni}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="clave">Clave:</label>
            <input type="text" class="form-control" name="clave" value="{{$user->clave}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="tipo">Tipo:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="tipo">
                <option value="Estudiante" @if( 'Estudiante'== $user->tipo) selected='selected' @endif> Estudiante </option>
                <option value="Profesor" @if( 'Profesor'== $user->tipo) selected='selected' @endif> Profesor </option>
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