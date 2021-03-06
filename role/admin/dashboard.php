<?php 

  include 'functions.php';
  $tu = totalUser();
  $tam = totalAdminMatrik();
  $tp = totalPembina();
   
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Ringkasan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php foreach($tu as $totalUser){ echo $totalUser; }?></h3>
              <p>Jumlah Pengguna Sistem</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
            <a href="index.php?page=users" class="small-box-footer">Lebih Detil &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          </div>         
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php foreach($tam as $totalAM){ echo $totalAM; }?></h3>
              <p>Jumlah Admin Matrikulasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
            <a href="index.php?page=adminmatrik" class="small-box-footer">Lebih Detil &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          </div>         
        </div>
        <!-- ./col -->    
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php foreach($tp as $totalPembina){ echo $totalPembina; }?></h3>
              <p>Jumlah Pembina Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
            <a href="index.php?page=pembina" class="small-box-footer">Lebih Detil &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
          </div>         
        </div>
        <!-- ./col --> 
      </div>
      <!-- /.row -->  

    </section>
    <!-- /.content -->