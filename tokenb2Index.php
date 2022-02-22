<?php

    include_once "conexion.php";


    /**Consulta de la Informacion de la BD */
    $query = "select KB2_BIT_MAP,KB2_USR_FLD1,KB2_ARQC,KB2_AMT_AUTH,KB2_AMT_OTHER,
    KB2_ATC,KB2_TERM_CTRY_CDE,KB2_TRAN_CRNCY_CDE,KB2_TRAN_DAT,KB2_TRAN_TYPE,
    KB2_UNPREDICT_NUM,KB2_ISS_APPL_DATA_LGTH,KB2_ISS_APPL_DATA,
    KB2_CRYPTO_INFO_DATA,KB2_TVR,KB2_TVR,KB2_AIP from test";

    $info = $conn->prepare($query);

    $info->execute();

    $data = $info->fetchAll(PDO::FETCH_ASSOC);

    /** **************************************************************** */
    $info = $data;

    $campo1 = array();
    $campo2 = array();
    $campo3 = array();
    $campo4 = array();
    $campo5 = array();
    $campo6 = array();
    $campo7 = array();
    $campo8 = array();
    $campo9 = array();
    $campo10 = array();
    $campo11 = array();
    $campo12 = array();
    $campo13 = array();
    $campo14 = array();
    $campo15 = array();
    $campo16 = array();


    for($i=0;$i<sizeof($info);$i++) {
      array_push($campo1,$info[$i]["KB2_BIT_MAP"]);
      array_push($campo2,$info[$i]["KB2_USR_FLD1"]);
      array_push($campo3,$info[$i]["KB2_CRYPTO_INFO_DATA"]);
      array_push($campo4,$info[$i]["KB2_TVR"]);
      array_push($campo5,$info[$i]["KB2_ARQC"]);
      array_push($campo6,$info[$i]["KB2_AMT_AUTH"]);
      array_push($campo7,$info[$i]["KB2_AMT_OTHER"]);
      array_push($campo8,$info[$i]["KB2_AIP"]);
      array_push($campo9,$info[$i]["KB2_ATC"]);
      array_push($campo10,$info[$i]["KB2_TERM_CTRY_CDE"]);
      array_push($campo11,$info[$i]["KB2_TRAN_CRNCY_CDE"]);
      array_push($campo12,$info[$i]["KB2_TRAN_DAT"]);
      array_push($campo13,$info[$i]["KB2_TRAN_TYPE"]);
      array_push($campo14,$info[$i]["KB2_UNPREDICT_NUM"]);
      array_push($campo15,$info[$i]["KB2_ISS_APPL_DATA_LGTH"]);
      array_push($campo16,$info[$i]["KB2_ISS_APPL_DATA"]);
     
    }


    $campo1_extra = array_unique($campo1);
    $campo1_extra_key = array_keys($campo1_extra);

    $campo2_extra = array_unique($campo2);
    $campo2_extra_key = array_keys($campo2_extra);

    $campo3_extra = array_unique($campo3);
    $campo3_extra_key = array_keys($campo3_extra);

    $campo4_extra = array_unique($campo4);
    $campo4_extra_key = array_keys($campo4_extra);

    $campo5_extra = array_unique($campo5);
    $campo5_extra_key = array_keys($campo5_extra);

    $campo6_extra = array_unique($campo6);
    $campo6_extra_key = array_keys($campo6_extra);

    $campo7_extra = array_unique($campo7);
    $campo7_extra_key = array_keys($campo7_extra);

    $campo8_extra = array_unique($campo8);
    $campo8_extra_key = array_keys($campo8_extra);

    $campo9_extra = array_unique($campo9);
    $campo9_extra_key = array_keys($campo9_extra);

    $campo10_extra = array_unique($campo10);
    $campo10_extra_key = array_keys($campo10_extra);


    $campo11_extra = array_unique($campo11);
    $campo11_extra_key = array_keys($campo11_extra);

    $campo11_extra = array_unique($campo11);
    $campo11_extra_key = array_keys($campo11_extra);

    $campo12_extra = array_unique($campo12);
    $campo12_extra_key = array_keys($campo12_extra);

    $campo13_extra = array_unique($campo13);
    $campo13_extra_key = array_keys($campo13_extra);

    $campo14_extra = array_unique($campo14);
    $campo14_extra_key = array_keys($campo14_extra);


    $campo15_extra = array_unique($campo15);
    $campo15_extra_key = array_keys($campo15_extra);

    $campo16_extra = array_unique($campo16);
    $campo16_extra_key = array_keys($campo16_extra);


  /**Validaciones de los filtros */

  if(isset($_POST["enviar"])) {

   $valor1 = $_POST["campo1"];
   $valor2 = $_POST["campo2"];
   $valor3 = $_POST["campo3"];
   $valor4 = $_POST["campo4"];
   $valor5 = $_POST["campo5"];
   $valor6 = $_POST["campo6"];
   $valor7 = $_POST["campo7"];
   $valor8 = $_POST["campo8"];
   $valor9 = $_POST["campo9"];
   $valor10 = $_POST["campo10"];
   $valor11 = $_POST["campo11"];
   $valor12 = $_POST["campo12"];
   $valor13 = $_POST["campo13"];
   $valor14 = $_POST["campo14"];
   $valor15 = $_POST["campo15"];

   $reg = array();

   /**filtro del campo1 */
   if($valor1 !== "nada") {

    $valor1 = "'".$valor1."'";
    
    $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_BIT_MAP = $valor1";

    $resf = $conn->prepare($query);

    $resf->execute();

    $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   } 
   
   /**Filtro del campo2 */
   elseif($valor2 !== "nada") {

   $valor2 = "'".$valor2."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_USR_FLD1 = $valor2";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   } 
   
   /**Filtro del campo3 */
   elseif($valor3 !== "nada") {

    $valor3 = "'".$valor3."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_ARQC = $valor3";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /** Filtro del campo4 */
   elseif($valor4 !== "nada") {

    $valor4 = "'".$valor4."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_AMT_AUTH = $valor4";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

  /**Filtro del campo5 */
  elseif($valor5 !== "nada") {

    $valor5 = "'".$valor5."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_AMT_OTHER = $valor5";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo6 */
   elseif($valor6 !== "nada") {

    $valor6 = "'".$valor6."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_ATC = $valor6";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo7 */
   elseif($valor7 !== "nada") {

    $valor7 = "'".$valor7."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_TERM_CTRY_CDE = $valor7";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo8 */
   elseif($valor8 !== "nada") {

    $valor8 = "'".$valor8."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_TRAN_CRNCY_CDE = $valor8";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo9 */
   elseif($valor9 !== "nada") {

    $valor9 = "'".$valor9."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_TRAN_DAT = $valor9";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo10 */
   elseif($valor10 !== "nada") {

    $valor10 = "'".$valor10."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_TRAN_TYPE = $valor10";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo11 */
   elseif($valor11 !== "nada") {

    $valor11 = "'".$valor11."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_UNPREDICT_NUM = $valor11";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo12 */
   elseif($valor12 !== "nada") {

    $valor12 = "'".$valor12."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_ISS_APPL_DATA_LGTH = $valor12";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo13 */
   elseif($valor13 !== "nada") {

    $valor13 = "'".$valor13."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_ISS_APPL_DATA = $valor13";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo14 */
   elseif($valor14 !== "nada") {

    $valor14 = "'".$valor14."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_CRYPTO_INFO_DATA = $valor14";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo15 */
   elseif($valor15 !== "nada") {

    $valor15 = "'".$valor15."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_TVR = $valor15";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }

   /**Filtro del campo16 */
   elseif($valor16 !== "nada") {

    $valor16 = "'".$valor16."'";
    
   $query = "select FIID_TARJ,FIID_COMER,NOMBRE_DE_TERMINAL,CODIGO_RESPUESTA,R,NUM_SEC,KQ2_ID_MEDIO_ACCESO,ENTRY_MODE,MONTO1 from test where KB2_AIP = $valor16";

   $resf = $conn->prepare($query);

   $resf->execute();

   $reg = $resf->fetchAll(PDO::FETCH_ASSOC);

   }


  //  if(!empty($reg)) {
  //   var_dump($reg);
  //   print '<br>';
  //   print count($reg);
  //   } 

  } 

  /**Final de las validaciones de los filtros */




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


  <!-- ********************************************************** -->

  <div class="content-wrapper mt-2" style="background:white !important" style="overflow:scroll">

                <!-- Content Header (Page header) -->
                <div class="content-header text-center">
                    <div class="container-fluid text-center">
                      <div class="row mb-2">
                        <div class="col-sm-12">
                          <h1 class="m-0 text-center text-dark display-2">Análisis por Token b2</h1>
                        </div><!-- /.col -->
                        
                      </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                  </div>
                  <!-- /.content-header -->

                  <!-- *************************************************** -->

                    <!-- Content Header (Page header) -->
   <div class="content-header text-center">
      <div class="container-fluid text-center">
        <div class="row mb-2">
          <div class="col-sm-12">
           
          <form action="tokenb2Index.php" method="post">

            <div class="form-row">

           
            <br>
            <div class="col">
              <label class="form-check-label" for="campo1">KB2_BIT_MAP</label>
                <select class="form-control" id="campo1" name="campo1">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo1_extra);$i++) { ?>
                    <option value="<?php echo $campo1_extra[$campo1_extra_key[$i]]; ?>"><?php echo $campo1_extra[$campo1_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KB2_USR_FLD1</label>
                <select class="form-control" id="campo2" name="campo2">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo2_extra);$i++) { ?>
                    <option value="<?php echo $campo2_extra[$campo2_extra_key[$i]]; ?>"><?php echo $campo2_extra[$campo2_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KB2_CRYPTO_INFO_DATA</label>
                <select class="form-control" id="campo3" name="campo3">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo3_extra);$i++) { ?>
                    <option value="<?php echo $campo3_extra[$campo3_extra_key[$i]]; ?>"><?php echo $campo3_extra[$campo3_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KB2_TVR</label>
                <select class="form-control" id="campo4" name="campo4">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo4_extra);$i++) { ?>
                    <option value="<?php echo $campo4_extra[$campo4_extra_key[$i]]; ?>"><?php echo $campo4_extra[$campo4_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KB2_ARQC</label>
                <select class="form-control" id="campo5" name="campo5">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo5_extra);$i++) { ?>
                    <option value="<?php echo $campo5_extra[$campo5_extra_key[$i]]; ?>"><?php echo $campo5_extra[$campo5_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>

              

            </div>


            <div class="form-row">

            <div class="col">
              <label class="form-check-label" for="campo1">KB2_AMT_AUTH</label>
                <select class="form-control" id="campo6" name="campo6">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo6_extra);$i++) { ?>
                    <option value="<?php echo $campo6_extra[$campo6_extra_key[$i]]; ?>"><?php echo $campo6_extra[$campo6_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KB2_AMT_OTHER</label>
                <select class="form-control" id="campo7" name="campo7">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo7_extra);$i++) { ?>
                    <option value="<?php echo $campo7_extra[$campo7_extra_key[$i]]; ?>"><?php echo $campo7_extra[$campo7_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KB2_AIP</label>
                <select class="form-control" id="campo8" name="campo8">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo8_extra);$i++) { ?>
                    <option value="<?php echo $campo8_extra[$campo8_extra_key[$i]]; ?>"><?php echo $campo8_extra[$campo8_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KB2_ATC</label>
                <select class="form-control" id="campo9" name="campo9">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo9_extra);$i++) { ?>
                    <option value="<?php echo $campo9_extra[$campo9_extra_key[$i]]; ?>"><?php echo $campo9_extra[$campo9_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KB2_TERM_CTRY_CDE</label>
                <select class="form-control" id="campo10" name="campo10">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo10_extra);$i++) { ?>
                    <option value="<?php echo $campo10_extra[$campo10_extra_key[$i]]; ?>"><?php echo $campo10_extra[$campo10_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


            </div>


            <div class="form-row">

            <div class="col">
              <label class="form-check-label" for="campo1">KB2_TRAN_CRNCY_CDE</label>
                <select class="form-control" id="campo11" name="campo11">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo11_extra);$i++) { ?>
                    <option value="<?php echo $campo11_extra[$campo11_extra_key[$i]]; ?>"><?php echo $campo11_extra[$campo11_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KB2_TRAN_DAT</label>
                <select class="form-control" id="campo12" name="campo12">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo12_extra);$i++) { ?>
                    <option value="<?php echo $campo12_extra[$campo12_extra_key[$i]]; ?>"><?php echo $campo12_extra[$campo12_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>

              <div class="col">
              <label class="form-check-label" for="campo1">KB2_TRAN_TYPE</label>
                <select class="form-control" id="campo13" name="campo13">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo13_extra);$i++) { ?>
                    <option value="<?php echo $campo13_extra[$campo13_extra_key[$i]]; ?>"><?php echo $campo13_extra[$campo13_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KB2_UNPREDICT_NUM</label>
                <select class="form-control" id="campo14" name="campo14">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo14_extra);$i++) { ?>
                    <option value="<?php echo $campo14_extra[$campo14_extra_key[$i]]; ?>"><?php echo $campo14_extra[$campo14_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


              <div class="col">
              <label class="form-check-label" for="campo1">KB2_ISS_APPL_DATA_LGTH</label>
                <select class="form-control" id="campo15" name="campo15">
                  <option value="nada">sin valor</option>
                 <?php for($i=0;$i<sizeof($campo15_extra);$i++) { ?>
                    <option value="<?php echo $campo15_extra[$campo15_extra_key[$i]]; ?>"><?php echo $campo15_extra[$campo15_extra_key[$i]]; ?></option>
                 <?php } ?>
                </select>
              </div>


            </div>


           
            
              
          <div class="form-row mt-3">
              <div class="col-5"></div>
              <div class="col-2">
                <button type="submit" class="btn btn-primary btn-block" name="enviar">Enviar</button> 
              </div>   
          </div>


        </form>

          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



                  <!-- ***************************************************** -->
  

                  <section >

                    <div class="card">
                       
                        <div class="card-body ">
                            <table id="example1" border="2px">
                                <thead>
                                <tr>
                                    <th>KB2_BIT_MAP</th>
                                    <th>KB2_USR_FLD1</th> 
                                    <th>KB2_CRYPTO_INFO_DATA</th> 
                                    <th>KB2_TVR</th>
                                    <th>KB2_ARQC</th>
                                    <th>KB2_AMT_AUTH</th>
                                    <th>KB2_AMT_OTHER</th>
                                    <th>KB2_AIP</th>
                                    <th>KB2_ATC</th>

                                    <th>KB2_TERM_CTRY_CDE</th>
                                    <th>KB2_TRAN_CRNCY_CDE</th>
                                    <th>KB2_TRAN_DAT</th>
                                    <th>KB2_TRAN_TYPE</th>

                                    <th>KB2_UNPREDICT_NUM</th>
                                    <th>KB2_ISS_APPL_DATA_LGTH</th>
                                    <th>KB2_ISS_APPL_DATA</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                  <?php for($i=0;$i<count($data);$i++) { 

                                     /**Convercion de cada uno de los campos */
                                    // Covercion del campo KB2_CRYPTO_INFO_DATA en binario
                                  $kb2_crypto_bin = base_convert($data[$i]["KB2_CRYPTO_INFO_DATA"],16,2);
                                  $kb2_crypto_full = str_pad($kb2_crypto_bin,8,"0",STR_PAD_LEFT);
                                  $kb2_crypto_str = str_split($kb2_crypto_full,1);
                                
                                  // Covercion del campo KB2_TVR en binario
                                  $kb2_tvr_bin =  base_convert($data[$i]["KB2_TVR"],16,2);
                                  $kb2_tvr_full =str_pad($kb2_tvr_bin,40,"0",STR_PAD_LEFT);
                                  $kb2_tvr_str = str_split($kb2_tvr_full,1);

                                  // Covercion del campo KB2_TVR en binario
                                  $kb2_aip_bin = base_convert($data[$i]["KB2_AIP"],16,2);
                                  $kb2_aip_full = str_pad($kb2_aip_bin,16,"0",STR_PAD_LEFT);
                                  $kb2_aip_str = str_split($kb2_aip_full,1);

                                  /**Final de la convercion de cada uno de los campos */

                                    $kb2_bit_ban1 = false;

                                    $kb2_usr_ban2 = false;
                                    $kb2_cryp_ban3 = false;
                                    $kb2_tvr_ban4 = false;
                                                                
                                    $kb2_arq_ban5 = false;   
                                    $kb2_amta_ban6 = false;  
                                    $kb2_amto_ban7 = false; 
                                                                    
                                    $kb2_aip_ban8 = false;
                                                                
                                    $kb2_atc_ban9 = false;   
                                    $kb2_ter_ban10 = false;   
                                    $kb2_tranc_ban11 = false;     
                                    $kb2_trand_ban12 = false;     
                                    $kb2_trant_ban13 = false;         
                                    $kb2_unpr_ban14 = false;       
                                    $kb2_issdl_ban15 = false;       
                                    $kb2_issd_ban16 = false;
                                    
                                    
                                    /**Validacion del campo 1 en caso de traer info */
                                    if(strlen($data[$i]["KB2_BIT_MAP"]) == 4) {

                                     
                                      /**Validacion del campo 2 */
                                      if(strlen($data[$i]["KB2_USR_FLD1"]) == 4) {

                                        $kb2_usr_ban2 = true;

                                      }

                                      /**Validacion del campo 3 */
                                      if(strlen($data[$i]["KB2_CRYPTO_INFO_DATA"]) == 2) {
                                         /**Validacion del campo3 */
                                      if($kb2_crypto_str[0] == "0" && $kb2_crypto_str[1] == "0" || $kb2_crypto_str[0] == "0" && $kb2_crypto_str[1] == "1" || $kb2_crypto_str[0] == "1" && $kb2_crypto_str[1] == "0" || $kb2_crypto_str[0] == "1" && $kb2_crypto_str[1] == "1") {

                                        if($kb2_crypto_str[4] == "0" || $kb2_crypto_str[4] == "1" ) {

                                            if($kb2_crypto_str[5] == "0" && $kb2_crypto_str[6] == "0" && $kb2_crypto_str[7] == "0" || $kb2_crypto_str[5] == "0" && $kb2_crypto_str[6] == "0" && $kb2_crypto_str[7] == "1" || $kb2_crypto_str[5] == "0" && $kb2_crypto_str[6] == "1" && $kb2_crypto_str[7] == "0" || $kb2_crypto_str[5] == "0" && $kb2_crypto_str[6] == "1" && $kb2_crypto_str[7] == "1") {

                                                $kb2_cryp_ban3 = true;

                                            } 
                                        }
                                    }

                                    }

                                      /**Validacion del campo 4 */
                                      if(strlen($data[$i]["KB2_TVR"]) == 10) {
                                        /**Validacion del campo 4 */
                                      if($kb2_tvr_str[0] == "0" || $kb2_tvr_str[0] == "1" && $kb2_tvr_str[1] == "0" || $kb2_tvr_str[1] == "1" && $kb2_tvr_str[2] == "0" || $kb2_tvr_str[2] == "1" && $kb2_tvr_str[3] == "0" || $kb2_tvr_str[3] == "1" && $kb2_tvr_str[4] == "0" || $kb2_tvr_str[4] == "1" && $kb2_tvr_str[8] == "0" || $kb2_tvr_str[8] == "1" && $kb2_tvr_str[9] == "0" || $kb2_tvr_str[9] == "1" && $kb2_tvr_str[10] == "0" || $kb2_tvr_str[10] == "1" && $kb2_tvr_str[11] == "0" || $kb2_tvr_str[11] == "1" && $kb2_tvr_str[12] == "0" || $kb2_tvr_str[12] == "1" && $kb2_tvr_str[16] == "0" || $kb2_tvr_str[16] == "1" && $kb2_tvr_str[17] == "0" || $kb2_tvr_str[17] == "1" && $kb2_tvr_str[18] == "0" || $kb2_tvr_str[18] == "1" && $kb2_tvr_str[19] == "0" || $kb2_tvr_str[19] == "1" && $kb2_tvr_str[20] == "0" || $kb2_tvr_str[20] == "1" && $kb2_tvr_str[21] == "0" || $kb2_tvr_str[21] == "1" && $kb2_tvr_str[24] == "0" || $kb2_tvr_str[24] == "1" && $kb2_tvr_str[25] == "0" || $kb2_tvr_str[25] == "1" && $kb2_tvr_str[26] == "0" || $kb2_tvr_str[26] == "1" && $kb2_tvr_str[27] == "0" || $kb2_tvr_str[27] == "1" && $kb2_tvr_str[28] == "0" || $kb2_tvr_str[28] == "1" && $kb2_tvr_str[32] == "0" || $kb2_tvr_str[32] == "1" && $kb2_tvr_str[33] == "0" || $kb2_tvr_str[33] == "1" && $kb2_tvr_str[34] == "0" || $kb2_tvr_str[34] == "1" && $kb2_tvr_str[35] == "0" || $kb2_tvr_str[35] == "1") {

                                        $kb2_tvr_ban4 = true;

                                    } 

                                    }

                                      /**Validacion del campo 5 */
                                      if(strlen($data[$i]["KB2_ARQC"]) == 16) {
                                        $kb2_arq_ban5 = true;
                                      }

                                      /**Validacion del campo 6 */
                                      if(strlen($data[$i]["KB2_AMT_AUTH"]) == 12) {
                                        $kb2_amta_ban6 = true;
                                      }

                                      /**Validacion del campo 7 */
                                      if(strlen($data[$i]["KB2_AMT_OTHER"] )== 12) {
                                        $kb2_amto_ban7 = true; 
                                      }

                                      /**validacion del campo 8 */
                                      if(strlen($data[$i]["KB2_AIP"]) == 4) {
                                         /**Validacion del campo 8 */
                                        if($kb2_aip_str[0] == "0" || $kb2_aip_str[0] == "1" && $kb2_aip_str[1] == "0" || $kb2_aip_str[1] == "1" && $kb2_aip_str[2] == "0" || $kb2_aip_str[2] == "1" && $kb2_aip_str[3] == "0" || $kb2_aip_str[3] == "1" && $kb2_aip_str[4] == "0" || $kb2_aip_str[4] == "1" && $kb2_aip_str[5] == "0" || $kb2_aip_str[5] == "1") {

                                          $kb2_aip_ban8 = true;

                                      } 
                                      }

                                      /**Validacion del campo 9 */
                                      if(strlen($data[$i]["KB2_ATC"]) == 4) {
                                        $kb2_atc_ban9 = true;
                                      }

                                      /**Validacion del campo 10 */
                                      if(strlen($data[$i]["KB2_TERM_CTRY_CDE"]) == 4) {
                                        $kb2_ter_ban10 = true;
                                      }

                                      /**Validacion del campo 11 */
                                      if(strlen($data[$i]["KB2_TRAN_CRNCY_CDE"]) == 4) {
                                        $kb2_tranc_ban11 = true; 
                                      }

                                      /**validacion del campo 12 */
                                      if(strlen($data[$i]["KB2_TRAN_DAT"]) == 6) {
                                        $kb2_trand_ban12 = true; 
                                       
                                      }

                                      /**Validacion del campo 13 */
                                      if(strlen($data[$i]["KB2_TRAN_TYPE"]) == 2) {
                                        $kb2_trant_ban13 = true;
                                      }

                                      /**Validacion del campo 14 */
                                      if(strlen($data[$i]["KB2_UNPREDICT_NUM"]) == 8) {
                                        $kb2_unpr_ban14 = true;
                                      }


                                      /**Validacion del campo 15 */
                                      if(strlen($data[$i]["KB2_ISS_APPL_DATA_LGTH"]) == 4) {
                                        $kb2_issdl_ban15 = true;
                                      }

                                      /**Validacion del campo 16 */
                                      if(strlen($data[$i]["KB2_ISS_APPL_DATA"]) == 64) {
                                        $kb2_issd_ban16 = true;
                                      }


                                      


                                      /**Validacion del campo1*/
                                      if($data[$i]["KB2_BIT_MAP"] == "7FF9" || $data[$i]["KB2_BIT_MAP"] == "7ff9" || $data[$i]["KB2_BIT_MAP"] == "FFF9" || $data[$i]["KB2_BIT_MAP"] == "fff9") {
                                          
                                        $kb2_bit_ban1 = true;
                                      } 

                                  }

                                    else if(strlen($data[$i]["KB2_BIT_MAP"]) == 0) {
                                      if(strlen($data[$i]["KB2_USR_FLD1"]) == 0 && strlen($data[$i]["KB2_CRYPTO_INFO_DATA"]) == 0 && strlen($data[$i]["KB2_TVR"]) == 0 && strlen($data[$i]["KB2_ARQC"]) == 0 && strlen($data[$i]["KB2_AMT_AUTH"]) == 0 && strlen($data[$i]["KB2_AMT_OTHER"] )== 0 && strlen($data[$i]["KB2_AIP"]) == 0 && strlen($data[$i]["KB2_ATC"]) == 0 && strlen($data[$i]["KB2_TERM_CTRY_CDE"]) == 0 && strlen($data[$i]["KB2_TRAN_CRNCY_CDE"]) == 0 && strlen($data[$i]["KB2_TRAN_DAT"]) == 0 && strlen($data[$i]["KB2_TRAN_TYPE"]) == 0 && strlen($data[$i]["KB2_UNPREDICT_NUM"]) == 0 && strlen($data[$i]["KB2_ISS_APPL_DATA_LGTH"]) == 0 && strlen($data[$i]["KB2_ISS_APPL_DATA"]) == 0) {
        
                                        $kb2_bit_ban1 = true;
                              
                                        $kb2_usr_ban2 = true;
                                        $kb2_cryp_ban3 = true;
                                        $kb2_tvr_ban4 = true;
                              
                              
                                        $kb2_arq_ban5 = true;   
                                        $kb2_amta_ban6 = true;  
                                        $kb2_amto_ban7 = true;  
                              
                                        $kb2_aip_ban8 = true;
                              
                                        $kb2_atc_ban9 = true;   
                                        $kb2_ter_ban10 = true;   
                                        $kb2_tranc_ban11 = true;     
                                        $kb2_trand_ban12 = true;     
                                        $kb2_trant_ban13 = true;         
                                        $kb2_unpr_ban14 = true;       
                                        $kb2_issdl_ban15 = true;       
                                        $kb2_issd_ban16 = true;
                                      
                                      }
                                    }

                                    echo "<tr>";

                                    if($kb2_bit_ban1) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_BIT_MAP"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_BIT_MAP"].'</td>';
                                    }

                                    if($kb2_usr_ban2) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_USR_FLD1"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_USR_FLD1"].'</td>';
                                    }

                                    if($kb2_cryp_ban3) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_CRYPTO_INFO_DATA"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_CRYPTO_INFO_DATA"].'</td>';
                                    }

                                    if($kb2_tvr_ban4) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_TVR"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_TVR"].'</td>';
                                    }

                                    if($kb2_arq_ban5) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_ARQC"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_ARQC"].'</td>';
                                    }

                                    if($kb2_amta_ban6) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_AMT_AUTH"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_AMT_AUTH"].'</td>';
                                    }


                                    if($kb2_amto_ban7) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_AMT_OTHER"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_AMT_OTHER"].'</td>';
                                    }

                                    if($kb2_aip_ban8) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_AIP"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_AIP"].'</td>';
                                    }

                                    if($kb2_atc_ban9) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_ATC"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_ATC"].'</td>';
                                    }


                                    if($kb2_ter_ban10) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_TERM_CTRY_CDE"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_TERM_CTRY_CDE"].'</td>';
                                    }


                                    if($kb2_tranc_ban11) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_TRAN_CRNCY_CDE"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_TRAN_CRNCY_CDE"].'</td>';
                                    }

                                    if($kb2_trand_ban12) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_TRAN_DAT"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_TRAN_DAT"].'</td>';
                                    }

                                    if($kb2_trant_ban13) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_TRAN_TYPE"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_TRAN_TYPE"].'</td>';
                                    }


                                    if($kb2_unpr_ban14) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_UNPREDICT_NUM"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_UNPREDICT_NUM"].'</td>';
                                    }


                                    if($kb2_issdl_ban15) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_ISS_APPL_DATA_LGTH"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_ISS_APPL_DATA_LGTH"].'</td>';
                                    }

                                    if($kb2_issd_ban16) {
                                      echo '<td style="background:green">'.$data[$i]["KB2_ISS_APPL_DATA"].'</td>';
                                    } else {
                                      echo '<td style="background:red">'.$data[$i]["KB2_ISS_APPL_DATA"].'</td>';
                                    }


                                    echo "</tr>";

                                   
                                  }
                                    
                                  ?>


                                </tbody>
                            </table>
                        </div>



                        <!-- Tabla para los filtros -->
                        <?php if(isset($reg)) { ?>
                        <div class="card-body ">
                            <table id="example2" border="2px" class="table table-sm table-striped">
                                <thead class="table-dark">
                                <tr>
                                    <th>FIID_TARJ</th>
                                    <th>FIID_COMER</th>
                                    <th>NUM_SEC</th>
                                    <th>NOMBRE_DE_TERMINAL</th>
                                    <th>CODIGO_RESPUESTA</th>
                                    <th>R</th>
                                    <th>KQ2_ID_MEDIO_ACCESO</th>
                                    <th>ENTRY_MODE</th>
                                    <th>MONTO</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for($i=0;$i<count($reg);$i++) { ?>
                                        <tr>

                                            <!-- Validacion del primer Token -->
                                            <td><?php echo $reg[$i]["FIID_TARJ"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $reg[$i]["FIID_COMER"]; ?></td>
                                            <!-- Final del primer Token -->

                                             <!-- Validacion del primer Token -->
                                             <td><?php echo $reg[$i]["NUM_SEC"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $reg[$i]["NOMBRE_DE_TERMINAL"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $reg[$i]["CODIGO_RESPUESTA"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $reg[$i]["R"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $reg[$i]["KQ2_ID_MEDIO_ACCESO"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $reg[$i]["ENTRY_MODE"]; ?></td>
                                            <!-- Final del primer Token -->

                                              <!-- Validacion del primer Token -->
                                              <td><?php echo $reg[$i]["MONTO1"]; ?></td>
                                            <!-- Final del primer Token -->
                                        </tr>
                                  <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php } ?>

                        <!-- Final de los filtros -->

                  </section>
  </div>


  <!-- ********************************************************** -->

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
      "buttons": ["csv", "excel", "pdf"]
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

