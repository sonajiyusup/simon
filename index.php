<?php

   session_start();
  
  if(!isset($_SESSION['role'])){
    echo '<script language="javascript">document.location="/simon/login.php";</script>';
  }

?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Monitoring</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/css/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/css/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/css/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/css/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/css/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" />    

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>M</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="assets/img/icon30.png">&nbsp;<b>Simon</b>Matrik</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-danger btn-flat"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>   

    <?php  
      if ($_SESSION['role'] =='admin') {
        include 'role/admin/sidebar.php';
      } else
      if($_SESSION['role'] =='adminmatrik'){
        include 'role/adminmatrik/sidebar.php';
      } else
      if($_SESSION['role'] =='pembina'){
        include 'role/pembina/sidebar.php';
      }

    ?> 

  </div>  
 

  <!-- jQuery 3 -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
    <!-- Popper -->
    <script src="assets/js/popper.min.js"></script>  
  <!-- Bootstrap 3.3.7 -->
  <script src="assets/js/bootstrap.min.js"></script> 
  <!-- Morris.js charts -->
  <script src="assets/js/raphael.min.js"></script>
  <script src="assets/js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="assets/js/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="assets/js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="assets/js/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="assets/js/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="assets/js/moment.min.js"></script>
  <script src="assets/js/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="assets/js/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="assets/js/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="assets/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="assets/js/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/js/demo.js"></script> 

    <script type="text/javascript">
      //Date picker
      $('#datepicker').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
      })      

      $('[data-mask]').inputmask()
      
    </script> 

</body>
</html>