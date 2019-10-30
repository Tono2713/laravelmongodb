<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar cursos</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Registrar cursos</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{url('curso/add')}}">
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
            <label for="nrc">NRC:</label>
            <input type="text" class="form-control" name="nrc">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="hora">Hora:</label>
            <input type="text" class="form-control" name="hora">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="profesor">Profesor:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="profesor">
                   <option value="">--Seleccionar--</option>
                    @foreach ($users as $user)
                    @if($user->tipo == 'Profesor') <option value="{{$user->dni}}" > {{$user->nombre}} </option> @endif
                    @endforeach 
              </select>
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="aula">Aula:</label>
              <select class="form-control" style='font-size: 16px; font-family: sans-serif; height:30px; width:350px;' name="aula">
                   <option value="">--Seleccionar--</option>
                    @foreach ($rooms as $room)
                    <option value="{{$room->numero}}" > {{$room->numero}} </option>
                    @endforeach 
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