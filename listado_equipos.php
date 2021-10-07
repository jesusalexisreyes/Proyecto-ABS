<?php
include("conn/connLocalhost.php");



if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno-1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM equipo";
$result = mysqli_query($connLocalhost,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);



$valor="";
if (isset($_GET['btnbusqueda'])) {
  $valor=$_GET['valorc'];


}
$queryGetEquipo = "SELECT id, placas, marca, modelo, fecha_adquisicion, estatus, fecha_alta, color, combustible FROM equipo WHERE placas LIKE '%$valor%'  ORDER BY id LIMIT $offset, $no_of_records_per_page ";
$resQueryGetEquipo = mysqli_query($connLocalhost, $queryGetEquipo) or trigger_error("There was an error getting the user data... please try again");

$totalEquipo = mysqli_num_rows($resQueryGetEquipo);

$EquipoDetails = mysqli_fetch_assoc($resQueryGetEquipo);

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
                <li><a href="index.php">Captura de Equipo</a></li>
                <li class="active"><a href="">Listado de Equipo</a></li>
                <li><a href="evaluacion_equipo.php">Evaluacion de Equipo</a></li>
              </ul>
            </nav>

          </div>
        </div>


      </div>



      <section class="section about-me"style="width: 65%;" data-section="section1">
        <div class="container">

          <div class="section-heading">

            <h2>Verifica los equipos</h2>
            <div class="line-dec"></div>
            <span>En esta seccion podras ver los quipos.</span>
          </div>
       <div class="right-image-post">
        <div class="" >



          <div class="table-striped table-responsive table-sm "style=" border-radius: 9px; background: aliceblue; padding: 10px ">


            <table  class="table table-striped breadcrumb-section "   >



              <thead>
                <tr>
                  <th scope="col">Placas</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Modelo</th>
                  <th scope="col">Estatus</th>
                  <th style="padding-inline-start: 22px" scope="col">  &nbsp;&nbsp; &nbsp;&nbsp; Accion</th>

                </tr>
              </thead>
              <tbody>
                <?php
                 do { ?>

                <tr>
                  <td><?php echo $EquipoDetails['placas'] ?></td>
                  <td><?php echo $EquipoDetails['marca'] ?></td>
                  <td><?php echo $EquipoDetails['modelo'] ?></td>
                  <td ><?php echo $EquipoDetails['estatus'] ?></td>
                  <td>
              <!-- <button button class="alert alert-warning" type="submit" id="submit"data-toggle="modal" data-target="#formatoRpropiedades" >REGISTRAR</button> -->
          <form  method="POST" action="informacionEquipo.php"  enctype="multipart/form-data" >
          <input type="hidden" name="inputPlacas" value="<?php echo $EquipoDetails['placas'] ?>" />
          <input type="hidden" name="inputMarca" value="<?php echo $EquipoDetails['marca'] ?>" />
          <input type="hidden" name="inputModelo" value="<?php echo $EquipoDetails['modelo'] ?>" />
          <input type="hidden" name="inputFecha_aquisicion" value="<?php echo $EquipoDetails['fecha_adquisicion'] ?>" />
          <input type="hidden" name="inputEstatus" value="<?php echo $EquipoDetails['estatus'] ?>" />
          <input type="hidden" name="inputFechaAlta" value="<?php echo $EquipoDetails['fecha_alta'] ?>" />
          <input type="hidden" name="inputColor" value="<?php echo $EquipoDetails['color'] ?>" />
          <input type="hidden" name="inputTipoCombustible" value="<?php echo $EquipoDetails['combustible'] ?>" />

          <input type="submit" class="btn btn-secondary" name="btneliminar"  value="Ver informacion" id="submit" />
          </form>
          </td>
                   
                </tr>

              </tbody>
            <?php } while($EquipoDetails = mysqli_fetch_assoc($resQueryGetEquipo)); ?>

            </table>



          </div>




  </div>



      </div>



        </div>
      </section>


 
        <?php include("includes/formatos/formatoEditarE.php");
 ?>



    </div> 

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
$(function() {
 $(document).on('click', 'input[type="button"]', function(event) {
    let id = this.id;
  console.log("Se presionó el Boton con Id :"+ id)
  });
});
    
</script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
