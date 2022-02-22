<?php

include_once "conexion.php";

$query = "select CODIGO_RESPUESTA,TIPO,KQ2_ID_MEDIO_ACCESO,sum(MONTO1) AS MONTO, count(*) as TXS from test group by CODIGO_RESPUESTA,TIPO,KQ2_ID_MEDIO_ACCESO";

$res = $conn->prepare($query);

$res->execute();

$info = array();
$tipo = array();
$codigo = array();
$kq2 = array();
$status = array();
$i=0;

while($data = $res->fetch(PDO::FETCH_ASSOC)) {
        $info[] = $data;

        if($data["CODIGO_RESPUESTA"]>='010') {
            array_push($info[$i],"Rechazadas");
         } else {
             array_push($info[$i],"Aprobadas");
         }

         $i++;
}

//TODO  OJO REGRESAR A ESTA PARTE A OPTIMIZAR MAS YA QUE ESTAS INSERTANDO TODO Y LUEGO DEPURANDO

for($i=0;$i<sizeof($info);$i++) {
    $status[] = $info[$i][0];
    $status = array_unique($status);
}

//TODO  OJO REGRESAR A ESTA PARTE A OPTIMIZAR MAS YA QUE ESTAS INSERTANDO TODO Y LUEGO DEPURANDO

for($i=0;$i<sizeof($info);$i++) {
        $tipo[] = $info[$i]["TIPO"];
        $tipo = array_unique($tipo);
}
/* ******************** */ 

//TODO  OJO REGRESAR A ESTA PARTE A OPTIMIZAR MAS YA QUE ESTAS INSERTANDO TODO Y LUEGO DEPURANDO

for($i=0;$i<sizeof($info);$i++) {
    $codigo[] = $info[$i]["CODIGO_RESPUESTA"];
    $codigo = array_unique($codigo);
}
/* ******************** */ 

//TODO  OJO REGRESAR A ESTA PARTE A OPTIMIZAR MAS YA QUE ESTAS INSERTANDO TODO Y LUEGO DEPURANDO

for($i=0;$i<sizeof($info);$i++) {
    $kq2[] = $info[$i]["KQ2_ID_MEDIO_ACCESO"];
    $kq2 = array_unique($kq2);
}
/* ******************** */ 



/* Conocer el total de Txs e Importe General*/    
$totalTxs = 0;
for($i=0;$i<count($info);$i++) {
    $totalTxs += $info[$i]["TXS"]; 
}

$totalImporte = 0;
for($i=0;$i<count($info);$i++) {
        $totalImporte += $info[$i]["MONTO"]; 
    }




    /* ******************** */  

    /* Conocer el total de Txs e Importe Aceptadas */
    $totalTxsAcept = 0;
for($i=0;$i<count($info);$i++) {
    if($info[$i]["CODIGO_RESPUESTA"] >= '000' && $info[$i]["CODIGO_RESPUESTA"] < '010' ) {
            $totalTxsAcept += $info[$i]["TXS"]; 
    }
    
}

$totalImporteAcept = 0;
for($i=0;$i<count($info);$i++) {
        if($info[$i]["CODIGO_RESPUESTA"] >= '000' && $info[$i]["CODIGO_RESPUESTA"] < '010' ) {
            $totalImporteAcept += $info[$i]["MONTO"];
        } 
    }




    /* ******************** */ 

    /* Conocer el total de Txs e Importe Rechazadas */
    $totalTxsRech = 0;
for($i=0;$i<count($info);$i++) {
    if($info[$i]["CODIGO_RESPUESTA"] >= '010' ) {
            $totalTxsRech += $info[$i]["TXS"]; 
    }
    
}

$totalImporteRech = 0;
for($i=0;$i<count($info);$i++) {
        if($info[$i]["CODIGO_RESPUESTA"] >= '010' ) {
            $totalImporteRech += $info[$i]["MONTO"];
        } 
    }



    /* ******************** */ 


 // % de aceptadas y rechazadas
 $porAcept = ($totalTxsAcept/$totalTxs)*100;
 $porRecha = ($totalTxsRech/$totalTxs)*100;

 $valoresPor = array();
 array_push($valoresPor,$porAcept);
 array_push($valoresPor,$porRecha);

  // TODO OJO DESPUES VENIR A OPTIMIZAR ESTO SE PUEDE SACAR EN UN SOLO FOR

$txsPor0210 = array();
$totalTxsRechxTipo0210 = 0;
$totalTxsAcepxTipo0210 = 0;
for($i=0;$i<count($info);$i++) {
    if($info[$i]["CODIGO_RESPUESTA"] >= '010' && $info[$i]["TIPO"] == '0210') {
        $totalTxsRechxTipo0210 += $info[$i]["TXS"]; 
    } 
}

for($i=0;$i<count($info);$i++) {
    if($info[$i]["CODIGO_RESPUESTA"] < '010' && $info[$i]["TIPO"] == '0210') {
        $totalTxsAcepxTipo0210 += $info[$i]["TXS"]; 
    } 
}

$txsPor0210[] =  $totalTxsAcepxTipo0210;
$txsPor0210[] =  $totalTxsRechxTipo0210;




$txsPor0420 = array();
$totalTxsRechxTipo0420 = 0;
$totalTxsAcepxTipo0420 = 0;
for($i=0;$i<count($info);$i++) {
    if($info[$i]["CODIGO_RESPUESTA"] >= '010' && $info[$i]["TIPO"] == '0420') {
        $totalTxsRechxTipo0420 += $info[$i]["TXS"]; 
    } 
}

for($i=0;$i<count($info);$i++) {
    if($info[$i]["CODIGO_RESPUESTA"] < '010' && $info[$i]["TIPO"] == '0420') {
        $totalTxsAcepxTipo0420 += $info[$i]["TXS"]; 
    } 
}

$txsPor0420[] =  $totalTxsAcepxTipo0420;
$txsPor0420[] =  $totalTxsRechxTipo0420;



/* ******************** */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PyJCSystem</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <?php
      require_once "pieChartPrincipal.php";
  ?>

  <?php
      require_once "barChartPrincipal.php";
  ?>


</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PyJCSystem</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    General
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="medioAccesoIndex.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Kq2 Medio Acceso
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="codigoRespuestaIndex.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Código Respuesta
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="entryModeIndex.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Entry Mode
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenc4Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token C4
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenc0Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token C0
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenb3Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token B3
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenb4Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token B4
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="tokenb2Index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Token B2
                </p>
                </a>
            </li>

            


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




 <!-- *********************************************************************** -->



     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background:white !important">
     <!-- Content Header (Page header) -->
     <div class="content-header text-center">
      <div class="container-fluid text-center">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-center text-dark display-2">Dashboard Sector Financiero</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
        <div class="row justify-content-between">
          <div class="col-md-3 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner text-center">
                <h2>General</h2>
                <h3 title="Transacciones">Txs<br><?php echo number_format($totalTxs,0,'.',','); ?></h3>

                <h4>Monto<br><?php echo number_format($totalImporte,2,'.',','); ?></h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-3 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner text-center">
              <h2>Aprobadas</h2>
              <h3 title="Transacciones">Txs<br><?php echo number_format($totalTxsAcept,0,'.',','); ?></h3>

              <h4>Monto<br><?php echo number_format($totalImporteAcept,2,'.',','); ?></h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-md-3 col-12">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner text-center">
              <h2>Rechazadas</h2>
              <h3 title="Transacciones">Txs<br><?php echo number_format($totalTxsRech,0,'.',','); ?></h3>

              <h4>Monto<br><?php echo number_format($totalImporteRech,2,'.',','); ?></h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>

         <!-- Main row -->
         <div class="row">
            
        <section class="col-lg-6 connectedSortable">
          <div id="genTxsPor"></div>
        </section>


          <section class="col-lg-6 connectedSortable w-100">
            <div id="grafica" style="width:100%"></div>
          </section>



         </div>
      </div>




     </section>


  </div>




   <!-- *********************************************************************** -->




   <!-- /.content-wrapper -->
   <footer class="main-footer text-center">
    <strong>Copyright</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>



<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>

    
      
