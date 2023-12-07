<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dental Dent</title>
  <!-- REQUIRED CSS -->
  <link rel="shortcut icon" href="vistas/assets/dist/img/AdminLTELogo.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="vistas/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/assets/dist/css/adminlte.min.css">
  <!-- Stilo personal -->
  <link rel="stylesheet" href="vistas/assets/dist/css/plantilla.css">
  <!-- Boostrap 5-->
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <!-- ============================================================
    =ESTILOS PARA USO DE DATATABLES CSS
    ===============================================================-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Sweet-alert  -->
  <link rel="stylesheet" href="vistas/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Jquery CSS UI-->
    <link rel="stylesheet" href="vistas/assets/plugins/jquery-ui/css/jquery-ui.css">
   
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="vistas/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/assets/dist/js/adminlte.min.js"></script>
  <!-- Chart JS -->
  <script src="vistas/assets/plugins/chart.js/Chart.min.js"></script>
  <!-- boostrp 5 -->
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>    
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>


    <!-- ============================================================
    =LIBRERIAS PARA EXPORTAR A ARCHIVOS
    ===============================================================-->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  <!-- Sweet-alert  -->
  <script src="vistas/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script> -->
  <!-- jquery UI -->
  <script src="vistas/assets/plugins/jquery-ui/js/jquery-ui.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php
    include_once "modulos/navbar.php";
    include_once "modulos/aside.php";
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php include "vistas/dashboard.php" ?>
    </div>
    <!-- /.content-wrapper -->
    <?php
    include_once "modulos/footer.php";
    ?>
  </div>
  <!-- ./wrapper -->
  <script>
    function CargarContenido(pagina_php, contenedor) {
      $("." + contenedor).load(pagina_php)
    }
  </script>
</body>

</html>