<?php
include("conn/connLocalhost.php");


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



$valor="";
if (isset($_GET['btnbusqueda'])) {
  $valor=$_GET['valorc'];


}
$queryGetEquipo = "SELECT id, placas, marca, modelo, fecha_adquisicion, estatus, fecha_alta, color, combustible FROM equipo WHERE placas LIKE '%$valor%'  ORDER BY placas LIMIT $offset, $no_of_records_per_page ";
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
                <li ><a href="listado_equipos.php">Listado de Equipo</a></li>
                <li class="active"><a href="evaluacion_equipo.php">Evaluacion de Equipo</a></li>
              </ul>
            </nav>


          </div>
        </div>


      </div>

      <section class="section about-me"style="width: 65%;" data-section="section1">
        <div class="container">

          <div class="section-heading">

            <h2>Evaluacion de equipos</h2>
            <div class="line-dec"></div>
            <span>En esta seccion podras dar ver la informacion completa de los equipos.</span>
          </div>
       <div class="right-image-post">
        <div class="" >



          <div class="table-striped table-responsive table-sm "style=" border-radius: 9px; background: aliceblue; ">


            <table  class="table table-striped breadcrumb-section "   >



              <thead>
                <tr>
id, placas, marca, modelo, fecha_adquisicion, estatus, fecha_alta, color, combustible
                  <th  scope="col">Id</th>
                  <th scope="col">Placas</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Modelo</th>
                  <th scope="col">Fecha adquisicion</th>
                  <th scope="col">Estatus</th>
                  <th scope="col">Fecha alta</th>
                  <th scope="col">Color</th>
                  <th scope="col">Combustible</th>
                  <th  scope="col">  &nbsp;&nbsp; &nbsp;&nbsp; Accion</th>

                </tr>
              </thead>
              <tbody>
                <?php
                 do { ?>

                <tr>
                  <td><?php echo $EquipoDetails['id'] ?></td>
                  <td><?php echo $EquipoDetails['placas'] ?></td>
                  <td><?php echo $EquipoDetails['marca'] ?></td>
                  <td><?php echo $EquipoDetails['modelo'] ?></td>
                  <td><?php echo $EquipoDetails['fecha_adquisicion'] ?></td>
                  <td ><?php echo $EquipoDetails['estatus'] ?></td>
                  <td><?php echo $EquipoDetails['fecha_alta'] ?></td>
                  <td><?php echo $EquipoDetails['color'] ?></td>
                  <td><?php echo $EquipoDetails['combustible'] ?></td>
                  <td>

                    <form  method="GET" action="includes/formatos/formatoEditarP.php" enctype="multipart/form-data" >
                      <input type="hidden" name="idp" value="<?php echo $EquipoDetails['id'] ?>" />


                      <input type ="hidden" name="tabla"  value=" <?php echo 'propiedad' ?>"/>
                      <input type="submit"  class="btn btn-warning" name="btneditarP" value="Editar" />

          </td>
                      </form>
                </tr>

              </tbody>
            <?php } while($EquipoDetails = mysqli_fetch_assoc($resQueryGetEquipo)); ?>

            </table>



          </div>
          <nav style="padding: 20px;" aria-label="Page navigation example">

              <ul class="pagination justify-content-center">
                  <li class="page-item"><a style="color:#2b2825;" class="page-link"href="?pageno=1">Primero</a></li>
                  <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                      <a style="color:#2b2825;" class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Anterior</a>
                  </li class="page-item">
                  <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                      <a style="color:#2b2825;" class="page-link"  href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Siguiente</a>
                  </li>
                  <li class="page-item"><a style="color:#2b2825;" class="page-link" href="?pageno=<?php echo $total_pages; ?>">Ultimo</a></li>
              </ul>
            </nav>



  </div>



      </div>



        </div>
      </section>




    </div>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
