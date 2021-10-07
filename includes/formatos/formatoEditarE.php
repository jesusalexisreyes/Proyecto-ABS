<?php 

include("conn/connLocalhost.php");


if(isset($_POST['btneliminar']) ) {


  // Recuperamos los datos del usuario en función del id del usuario que tiene sesión iniciada
  $queryPropiedadData = sprintf("SELECT * FROM equipo WHERE id = %d",
    mysqli_real_escape_string($connLocalhost, trim($_POST['idEquipo']))
  );
  // Ejecutamos el query
  $queryPropiedadData = mysqli_query($connLocalhost, $queryPropiedadData) or trigger_error("There was an error recovering the user data...");

  // Contamos el resultset
//  $validId = mysqli_num_rows($queryPropiedadData);

  // Evaluamos el conteo, si es 0 es id invalida
  //if(!$validId) $error[] = "The user id doesn't exist";

  // Hacemos un fetch de los resultados
  $propiedadDetails = mysqli_fetch_assoc($queryPropiedadData);

}







 ?>





?>




<div style=" transition: all 0.35s ease-in;" class="modal fade" id="formatoRpropiedades" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">

<div class="form">



    <form method="post" action="control.propiedad.php" enctype="multipart/form-data">
      <div class="check-date">
        <br>
        <label id="formularioletra">Registro de propiedades</label>
        <br> <p><?php   echo $_POST['idEquipo']; ?> </p>
          <label for="room" >Colonia:</label>

          <input type="text" required name="colonia" placeholder="Colonia de la propiedad" />
          <br>

        <label for="room"></label>
          <label for="room">Numero:</label>
          <input required type="text" placeholder="numero de propiedad" name="numero" />
            <br>
          <label for="room" >Habitaciones:</label>
          <input required min="0" step="1" type="number" placeholder="numero de habitaciones de la propiedad"  name="habitaciones"/>
            <br>
          <label for="room" >Capacidad:</label>
          <input required min="0" step="1" type="number" placeholder="numero de capacidad de personas" name="capacidad"/>
            <br>
          <label for="room" >Baño:</label>
          <input required min="0" step="1" type"number" name="baño" placeholder="numero de baños en propiedad" />
            <br>

      </div>
        <div class="select-option">
            <label for="guest" >Tipo:</label>
            <select required  id="guest" name="tipo">
                <option value="1">Condominio</option>
                <option value="2">Casa</option>
                <option value="3">Departamento</option>

            </select>
        </div>
        <div class="check-date">
            <label for="room" >Imagen:</label>

            <input type="file" required class="form-control-file" name="files[]" multiple >
              <br>

          <label for="room"></label>
            <label for="room">Descripcion:</label>
            <textarea style=" width: -webkit-fill-available;" required type="text" rows="4" cols="60" name="descripcion" placeholder="Descripcion de la casa"></textarea>
              <br>
            <label for="room" >Costo por dia:</label>
            <input required min="0" step="1" name="costo_dia" type="text" placeholder="renta por dia" />
              <br>
            <label for="room" >Costo por semana:</label>
            <input required min="0" step="1" name="costo_semana" type="text" placeholder="renta semanal" />
              <br>
            <label for="room" >Costo por mes:</label>
            <input required min="0" step="1" name="costo_mes" type="text" placeholder="renta por mes" />
              <br>
              <input required name= "latitud" id="latitud" type="hidden"  />
              <input required name ="longitud" id="longitud" type="hidden" />





        </div>


        <input type="submit" name="sent"  value="Registrar" >
    </form>
</div>
</div>