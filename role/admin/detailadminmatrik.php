<?php 

  include 'functions.php';
    $id = $_GET['id'];
      $dataAdminMatrik = adminMatrikDetails($id);
      foreach($dataAdminMatrik as $row){  
  
 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <a class="btn btn-primary" href="index.php?page=adminmatrik"><i class="fa fa-arrow-left"></i></a>&nbsp;
        Profil Admin Matrikulasi
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Manajemen Pengguna</li>
        <li><a href="index.php?page=adminmatrik">Admin Matrikulasi</a></li>
        <li class="active"><?php echo $row['nama'] ?></li>
      </ol>
    </section> 

    <!-- Main content -->
    <section class="content">
      <div class="row">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <div class="col-md-3"></div>
              <div class="col-md-5">
              <a href="#ModalUploadAva" data-toggle='modal'><img class="profile-user-img img-responsive img-circle" src=<?php
                if ($row['avatar'] == NULL) {
                  if ($row['j_kelamin'] == 'Perempuan'){
                    echo 'assets/img/user/default-female.jpg';
                  } else
                  if ($row['j_kelamin'] == 'Laki-laki'){
                    echo 'assets/img/user/default-male.png';
                  } else
                  if ($row['j_kelamin'] == NULL){
                    echo 'assets/img/user/default.png';
                  }
                } else if($row['avatar'] != NULL){
                  echo 'assets/img/user/'.$row['avatar'];
                }               
              ?>
               alt="User profile picture"></a>
              <h3 class="profile-username text-center"><?php echo $row['nama']; ?></h3>

              <p class="text-muted text-center">Admin Matrikulasi</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <div class="pull-right"><code><?php echo $row['username']; ?></code>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-user-o fa-lg"></i></span></div>
                </li> 
                <li class="list-group-item">
                  <b>Email</b> <div class="pull-right"><?php if($row['email'] == NULL){echo 'Belum diatur';}else{echo $row['email'];} ?>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-outline" href=""><i class="fa fa-envelope-o fa-lg"></i></a></div>
                </li>             
                <li class="list-group-item">
                  <b>No Telp</b> <div class="pull-right"><?php if($row['telp'] == NULL){echo 'Belum diatur';}else{echo $row['telp'];} ?>&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-outline" href=""><i class="fa fa-whatsapp fa-lg"></i></a></div>
                </li>
                <li class="list-group-item">
                  <b>Jenis Kelamin</b> <div class="pull-right"><?php if($row['j_kelamin'] == NULL){echo 'Belum diatur';}else{echo $row['j_kelamin'];} ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-venus-mars fa-lg"></i></span></div>
                </li>                  
                
                <li class="list-group-item">
                  <b>Tanggal Lahir</b> <div class="pull-right"><?php if($row['tgl_lahir'] == NULL){echo 'Belum diatur';}else{echo date('d F Y', strtotime($row['tgl_lahir']));} ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-calendar-o fa-lg"></i></span></div>
                </li>                                  
              </ul>
                <a href="index.php?page=editpembina&id=<?php echo $row['id_user']; ?>" class='btn btn-primary btn-block'><i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit Data Profil</a>

              <?php echo "<a href='#ModalHapusPembina' class='btn btn-danger btn-outline btn-block' data-toggle='modal' data-href='action/hapus.php?idadminmatrik=".$row['id_adminmatrik']."&iduser=".$row['id_user']."'><i class='fa fa-trash'></i>&nbsp;&nbsp;Hapus Admin Matrikulasi</a>"; ?>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <?php } ?>

        <div class="modal fade" id="ModalEditPembina" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-pencil"></i>&nbsp;&nbsp;<b>Edit Profil</b></h4>
                    </div>
                    <div class="modal-body">
                        <div class="fetched-data"></div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Batal</button>
                      <button type="submit" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Hapus Pembina -->
        <div class="modal fade" id="ModalHapusPembina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b><i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Anda yakin ?</b></h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <a class="btn btn-danger btn-ok"><i class="fa fa-remove"></i>&nbsp;Hapus</a>                    
                    </div>
                </div>
            </div>
        </div>        
        <!-- /Modal Hapus Pembina -->            

        <!-- Modal Upload Avatar -->
        <div class="modal fade" id="ModalUploadAva" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b><i class="fa fa-user-circle fa-lg"></i>&nbsp;&nbsp;Upload Foto Profil</b></h4>
                    </div>
                    <div class="modal-body">
                      <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="AvaProfilFile">
                    </div>                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <button type="submit" class="btn btn-primary btn-ok" name="uploadAva"><i class="fa fa-cloud-upload"></i>&nbsp;Upload</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>        
        <!-- /Modal Upload Avatar -->         
      </div>       