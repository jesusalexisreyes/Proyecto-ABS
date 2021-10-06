<?php

include("conn/connLocalhost.php");

if(isset($_POST['registro'])) {


  $placas= $_REQUEST['inputPlacas'];
  $marca = $_REQUEST['inputMarca'];
  $modelo= $_REQUEST['inputModelo'];
  $color = $_REQUEST['inputColor'];
  $combustible= $_REQUEST['inputTipoCombustible'];
  $fecha_alta = $_REQUEST['inputFechaAlta'];
  $estatus = $_REQUEST['inputEstatus'];



    // Definimos el query a ejecutar
    $queryEquipoAdd = sprintf(" INSERT INTO equipo (placas, marca, modelo, estatus, fecha_adquisicion, color, combustible)
    VALUES ( '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
        mysqli_real_escape_string($connLocalhost,trim($placas)),
        mysqli_real_escape_string($connLocalhost,trim($marca)),
        mysqli_real_escape_string($connLocalhost,trim($modelo)),
        mysqli_real_escape_string($connLocalhost,trim($estatus)),
        mysqli_real_escape_string($connLocalhost,trim($fecha_alta)),
        mysqli_real_escape_string($connLocalhost,trim($color)),
        mysqli_real_escape_string($connLocalhost,trim($combustible))


    );


    $resQuerypropiedad = mysqli_query($connLocalhost, $queryEquipoAdd) or trigger_error("The equipo insert query failed...");

    if($resQuerypropiedad) {

    }



}



if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 5;
$offset = ($pageno-1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM equipo";
$result = mysqli_query($connLocalhost,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);







 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Captura de Equipo</title>
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
    <link rel="icon" href="https://www.proyectosabs.com/images/biglogo.fw.png">

  </head>

  <body >
    <div id="page-wraper" style="background-color:#870505de;">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>

        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="https://www.proyectosabs.com/images/biglogo.fw.png" alt="Blugoon by Tooplate" /></a>
            </div>
            <div class="author-content">
              <h4>Administrador</h4>
             <!-- <span>Free Bootstrap Theme</span> -->
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <br>
                <br>
                <li class="active"><a href="#">Captura de Equipo</a></li>
                <li><a href="listado_equipos.php">Listado de Equipo</a></li>
                <li><a href="evaluacion_equipo.php">Evaluacion de Equipo</a></li>
              </ul>
            </nav>


          </div>
        </div>


      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">

          <div class="section-heading">

            <h2>Registra equipos nuevos</h2>
            <div class="line-dec"></div>
            <span>En esta seccion podras dar de alta equipos nuevos.</span>
          </div>
       <div class="right-image-post">
        <div class="" >


          <?php if(isset($queryEquipoAdd)){
           ?>
           <div class="alert alert-success alert-dismissible fade show">
              <strong>Success!</strong> Se ha registrado un propiedad exitosamente.
              <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
          <?php } ?>


        <form method="post" action="index.php">

          <div class="form-group ">

            <label for="inputPlacas">Placas</label>
            <input type="text" class="form-control" id="inputPlacas" name="inputPlacas" placeholder="Placas" required>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputMarca">Marca</label>
              <input type="text" class="form-control" id="inputMarca" name="inputMarca" placeholder="Marca" required>
            </div>

            <div class="form-group col-md-6">
              <label for="inputModelo">Modelo</label>
              <input type="text" class="form-control" id="inputModelo" name="inputModelo" placeholder="Modelo" required>
            </div>
          </div>

          <div class="form-row">

           <div class="form-group col-md-6">
            <label for="inputColor">Color del equipo</label  required>
            <br>
            <input type="color" name="inputColor">

           </div>

            <div class="form-group col-md-6">
              <label for="inputModelo">Tipo de combustible</label>
              <select id="inputState" class="form-control" required name="inputTipoCombustible">
                <option hidden selected>Selecciona una opcion</option>
                <option>Gasolina</option>
                <option>Disel</option>
              </select>            </div>
           </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputFechaAlta">Fecha de alta</label >
              <input type="date" class="form-control" id="inputFechaAlta" name="inputFechaAlta" required >
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Estatus</label>

              <select id="inputState" class="form-control" required name="inputEstatus">
                <option hidden selected>Selecciona una opcion</option>
                <option>Enviado  </option>
                <option>Asignado</option>
                <option>Disponible</option>
                <option>Baja</option>
              </select>
            </div>

          </div>


     <button type="submit" name="registro"  class="btn btn-primary">Registrar equipo</button>
                <p>Status </p>
               <p class="text" style="font-size:75%;">
               <b>Enviado:</b> Cuando se termina de capturar y se envia al area de evaluacion para su revision <br>
               <b>Asignado:</b> Cuando el area de la evaluacion asigna el equipo a un empleado
               <br> <b>Disponible:</b>Cuando el area de la evaluacion no asigna el equipo a ningun personal <br>
               <b>Baja:</b>Cuanod el area de evaluacion se da de baja el equipo </p>

               <?php if (isset($placas)) {
                echo $placas;               }  ?>
        </form>




  </div>



      </div>



        </div>
      </section>
      <div class="modal fade" id="modal_exito" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h3 class="modal-title">Usuario creado correctamente</h3>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>



    </div>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script language="javascript">>
    <?php if($resQuerypropiedad) echo "      $('#modal_exito').modal('show');"; ?>




     </script>

  </body>
</html>
