<?php


if(isset($_POST['btneliminar'])) {


  $placas= $_REQUEST['inputPlacas'];
  $marca = $_REQUEST['inputMarca'];
  $modelo= $_REQUEST['inputModelo'];
  $color = $_REQUEST['inputColor'];
  $combustible= $_REQUEST['inputTipoCombustible'];
  $fecha_alta = $_REQUEST['inputFechaAlta'];
  $estatus = $_REQUEST['inputEstatus'];
  $fecha_adquisicion = $_REQUEST['inputFecha_aquisicion']; 
 

}

if (!isset($placas)) {
 header("Location: listado_equipos.php");
}
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Detalle de Equipo</title>
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
                <li><a href="index.php">Captura de Equipo</a></li>
                <li class="active"><a href="listado_equipos.php">Listado de Equipo</a></li>
                <li><a href="evaluacion_equipo.php">Evaluacion de Equipo</a></li>
              </ul>
            </nav>

          </div>
        </div>


      </div>



      <section class="section about-me"style="width: 65%;" data-section="section1">
        <div class="container">

          <div class="section-heading">

            <h2>Detalle de los equipos</h2>
            <div class="line-dec"></div>
            <span>En esta seccion podras ver los equipos.</span>
          </div>
       
       <div class="right-image-post">
        <div class="" >



          <div class="table-striped table-responsive table-sm "style=" border-radius: 9px; background: aliceblue; ">


              <!-- <button button class="alert alert-warning" type="submit" id="submit"data-toggle="modal" data-target="#formatoRpropiedades" >REGISTRAR</button> -->

<div class="d-flex justify-content-start" style="padding: 53px;">

    <div class="conteiner " style="width: 90%;">


    
            <div class="form-group col-sm"  >
                <label for="inputUserName" >Placas</label>
                <input type="text" class="form-control" id="inputUserName" disabled  value="<?php echo $placas ?>">
            </div>

            <div class="form-group col-sm"  >
                <label for="inputUserName" >Marca</label>
                <input type="text" class="form-control" id="inputUserName" disabled  value="<?php echo $marca ?>">
            </div>

            <div class="form-group col-sm"  >
                <label for="inputUserName" >Modelo</label>
                <input type="text" class="form-control" id="inputUserName" disabled  value="<?php echo $modelo ?>">
            </div>

            <div class="form-group col-sm"  >
               <label for="exampleColorInput" class="form-label">Color</label>
              <input type="color" style="width: 10%;" class="form-control form-control-color" disabled id="exampleColorInput" value="<?php echo $color ?>" title="Choose your color">
            </div>

            <div class="form-group col-sm"  >
                <label for="inputUserName" >Combustible</label>
                <input type="text" class="form-control" id="inputUserName" disabled  value="<?php echo $combustible ?>">
            </div>

            <div class="form-group col-sm"  >
                <label for="inputUserName" >Fecha aquisicion</label>
                <input type="text" class="form-control" id="inputUserName" disabled  value="<?php echo $fecha_adquisicion ?>">
            </div>

            <div class="form-group col-sm"  >
                <label for="inputUserName" >Estatus</label>
                <input type="text" class="form-control" id="inputUserName" disabled  value="<?php echo $estatus ?>">
            </div>

            <div class="form-group col-sm"  >
                <label for="inputUserName" >Fecha alta</label>
                <input type="text" class="form-control" id="inputUserName" disabled  value="<?php echo $fecha_alta ?>">
            </div>

    </div>

</div>



          </div>

  </div>



      </div>



        </div>
      </section>


 



    </div> 

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
