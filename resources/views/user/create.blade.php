<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Registrar Usuario</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{url('user/add')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="dni">DNI:</label>
            <input type="text" class="form-control" name="dni">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="clave">Clave:</label>
            <input type="text" class="form-control" name="clave">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="tipo">Tipo:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="tipo">
                <option value="">--Selecionar--</option>
                <option value="Estudiante"> Estudiante </option>
                <option value="Profesor"> Profesor </option>
              </select>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>