<?php 

  include 'functions.php';
      $dataMahasiswa = mahasiswaDetails($_SESSION['id_user']);
      foreach($dataMahasiswa as $row){ 
 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profil Saya
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/simon"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Profil</li>
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
              <?php 
                if (isset($_GET['alert'])) {
                  if ($_GET['alert'] == 'passchanged') {
                    echo "<div class='alert alert-success alert-dismissable fade in'>
                          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <strong>Sukses !</strong> Password berhasil diubah. Anda dapat login dengan password yang baru
                        </div>";
                  } else
                  if ($_GET['alert'] == 'avaupdated') {
                    echo "<div class='alert alert-success alert-dismissable fade in'>
                          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <strong>Sukses !</strong> Foto Profil berhasil diupload. Akan sepenuhnya muncul saat anda login kembali
                        </div>";
                  }  else
                  if ($_GET['alert'] == 'profileupdated') {
                    echo "<div class='alert alert-success alert-dismissable fade in'>
                          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <strong>Sukses !</strong> Data profil berhasil diubah
                        </div>";
                  }
                }
                
               ?>
              <a href="#ModalUploadAva" title="Klik untuk Ganti Foto Profil" data-toggle='modal'><img class="profile-user-img img-responsive img-circle" src=<?php
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
              ?> alt="User profile picture"></a>
              <h3 class="profile-username text-center"><?php echo $row['nama']; ?></h3>

              <p class="text-muted text-center">Mahasiswa</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Nomor Induk Mahasiswa</b> <div class="pull-right"><?php echo $row['nim']; ?>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-id-badge fa-lg"></i></span></div>
                </li> 
                <li class="list-group-item">
                  <b>Username</b> <div class="pull-right"><span class='badge bg-aqua'><?php echo $_SESSION['username']; ?></span>&nbsp;&nbsp;&nbsp;<span class="btn btn-secondary" href=""><i class="fa fa-user-o fa-lg"></i></span></div>
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
                <a href="index.php?page=editprofil" class='btn btn-primary btn-block'><i class='fa fa-pencil'></i>&nbsp;&nbsp;Edit Data Profil</a>
                <?php echo "<a href='#ModalGantiPass' class='btn btn-warning btn-outline btn-block' data-toggle='modal' data-href='action/hapus.php?&iduser=".$row['id_user']."'><i class='fa fa-lock'></i>&nbsp;&nbsp;Ganti Password</a>"; ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <?php } ?>

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
                <form action="upload.php" method="post" enctype="multipart/form-data">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h4><b><i class="fa fa-user-circle fa-lg"></i>&nbsp;&nbsp;Upload Foto Profil</b></h4>
                    </div>
                    <div class="modal-body">
                      
                        <input type="file" name="file">
                    </div>                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" name="uploadAvaMahasiswa" value="Upload">
                    </div>
                  </div>
                </form>
              </div>
        </div>        
        <!-- /Modal Upload Avatar --> 

        <!-- Modal Ganti Password -->
        <div class="modal fade" id="ModalGantiPass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
              <form method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><b><i class="fa fa-lock fa-lg"></i>&nbsp;&nbsp;Ganti Password</b></h4>
                    </div>
                    <div class="modal-body">
                        <label>Password Baru : </label>
                        <input type="password" name="pass" class="form-control" id="pwinput2" placeholder="Masukan Password Baru" pattern=".{0}|.{8,}" title="8 Karakter Minimal" required>
                        <label>Konfirmasi Password : </label>
                        <input type="password" name="passConf" class="form-control" id="pwinput3" placeholder="Masukan Ulang Password Baru" pattern=".{0}|.{8,}" title="8 Karakter Minimal" required>
                        <!-- &nbsp;<input type="checkbox" id="pwcheck" />&nbsp;Tampilkan Password -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-undo"></i>&nbsp;Batal</button>
                        <button type="submit" class="btn btn-primary btn-ok" name="gantiPass"><i class="fa fa-check"></i>&nbsp;Simpan</button>
                    </div>
                </div>
              </form>
            </div>
        </div>        
        <!-- /Modal Ganti Password -->         
      </div>       
      <!-- row -->

<?php 
  if (isset($_POST['gantiPass'])) {
    gantiUserPassword($_SESSION['id_user'], $_POST['pass']);
    echo "<script>document.location='/simon/index.php?page=profil&alert=passchanged'</script>";
  }

 ?>