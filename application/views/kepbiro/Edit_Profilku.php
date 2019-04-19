<!--Counter Inbox-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Pengaduan Keluhan Pegawai | Edit Profil</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/img/ico/favicon.png'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/js/dropify/dropify.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-theme.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/AdminLTE.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/skins/_all-skins.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/styles.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'; ?>"/>

</head>

<body class="skin-blue sidebar-mini wysihtml5-supported">
<div class="wrapper">

	<?php 

$this->load->view('kepbiro/header');
?>

 <aside class="main-sidebar" >

    <section class="sidebar">
        <div class="user-panel">
        <div class="pull-left image">
				<?php
            $id_staff = $this->session->userdata('ses_id');
            $q = $this->db->query("SELECT * FROM staff WHERE id_staff='$id_staff'");
            $c = $q->row_array();
            ?>
          <img src="<?php echo base_url().'assets/img/avatar/staff/'.$c['foto']; ?>" class="lazyload img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
					<p><?php echo ucfirst($c['nama']); ?></p>
					<a href=""><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" >
        <li>
          <a href="<?php echo base_url().'kepbiro/home'; ?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url().'kepbiro/keluhan'; ?>">
            <i class="fa fa-newspaper-o"></i> <span>Keluhan Awal-Proses</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
					<li>
          <a href="<?php echo base_url().'kepbiro/keluhan_lanjut'; ?>">
            <i class="fa fa-clock-o"></i> <span>Keluhan Lanjut</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
			<li>
          <a href="<?php echo base_url().'kepbiro/keluhan_selesai'; ?>">
            <i class="fa fa-flag-checkered"></i> <span>Keluhan Selesai</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
      </li>
		<li>
          <a href="<?php echo base_url().'kepbiro/keluhan_reject'; ?>">
            <i class="fa fa-window-close"></i> <span>Keluhan Ditolak</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
    </li>	


         <li>
          <a href="<?php echo base_url().'login/logout'; ?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        
       
      </ul>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profil
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Kepala Biro</a></li>
        <li class="active">Edit Profil</li>
      </ol>
    </section>
			<?php
     foreach ($data->result_array() as $i) :
                $id_staff = $i['id_staff'];
                $nama = $i['nama'];
                $foto = $i['foto'];
                $last_login = $i['last_login'];
                $created_by = $i['created_by'];
                $created_on = $i['created_on'];
                $active = $i['active'];
                $ip = $i['IP'];
      ?>
    <section class="content">
   <div class="row">
        <div class="col-md-3">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="lazyload profile-user-img img-responsive img-circle" src="<?php echo base_url().'assets/img/avatar/staff/'.$foto; ?> " >

              <h3 class="profile-username text-center"><?php echo ucfirst($nama); ?></h3>

              <p class="text-muted text-center">Kepala Biro</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item text-center">
          				<b>Terakhir login</b><br>
									<i><a class="pull"><?php echo $last_login; ?></a></i>
                </li>
                <li class="list-group-item text-center">
                  <b>Terdaftar pada</b><br>
									<i><a class="pull"><?php echo $created_on; ?></a></i>
                </li>
								 <li class="list-group-item text-center">
                  <b>IP Address sekarang</b><br>
									<i><a class="pull"><?php echo $ip; ?></a></i>
                </li>
              </ul>
            </div>
          </div>
        </div>

				<div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#profile" data-toggle="tab"><i class="fa fa-user"></i> Update Profile</a></li>
              <li><a href="#settings" data-toggle="tab"><i class="fa fa-key"></i> Update Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="profile">
							 <form  action="<?php echo base_url().'kepbiro/edit_profilku/update_profil'; ?>" method="post" enctype="multipart/form-data">
							 <br>
								<div class="form-group">
									<input type="hidden" name="kode" value="<?php echo $id_staff; ?>"/>
                  <label for="inputEmail3" class="col-sm-2 control-label"><h4>Nama</h4></label>
											<div class="input-group">
													<span class="input-group-addon"><i class="fa fa-user"></i></span>
													<input type="text" name="xnama" id="xnama" value="<?php echo $nama; ?>" class="form-control" placeholder="Username">
											</div>				
							</div>					
               <div class="form-group">
                      <label for="inputUserName" class="col-sm-4 control-label"><h4>Foto</h4> </label>	
                          <div class="input-group">
                                <div class="form-group">
																		<input type="file"  name="filefoto" class="dropify" data-height="200" >
																</div>
													</div>		
                </div>  
						
              </div>
              <div class="tab-pane" id="settings">
   								 	<div class="form-group">
                  		<label for="	inputPassword3" class="col-sm-2 control-label"><h4>Password</h4></label>
												<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-key"></i></span>
                              <input type="password" name="xpassword" class="form-control" id="xpassword" placeholder="Password">
                    		</div>	
										</div>				
										<div class="form-group">
                  		<label for="	inputPassword4" class="col-sm-2 control-label"><h4>Ulangi Password</h4></label>
											   	<div class="input-group">
															<span class="input-group-addon"><i class="fa fa-key"></i></span>
                              <input type="password" name="xpassword2" class="form-control" id="xpassword2" placeholder="Password">
															<span id="password_result"></span>
                    		</div>	
										</div>
								</div>				
              </div>
							<div class="box-footer">
											<button type="submit" class="btn btn-primary btn-flat" id="simpan" style="float: right;"><i class="fa fa-save"></i> Simpan</button>
								</div>
            </form>
          </div>
					<?php endforeach; ?>
          </div>
  
      </div>
    </section>
    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b><?php echo $online; ?> user online</b> 
    </div>
    <strong> Copyright &copy; 2018  <a href="">Reinhart Joshua Utama - 672015116</strong></a>. All rights reserved.
	</footer>

 <aside class="control-sidebar control-sidebar-dark">
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab">
			</div>	
		</div>
</aside>		


   


	
	

<script src="<?php echo base_url().'assets/js/jquery-3.3.1.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/js/popper.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'; ?>"></script>
<script src="<?php echo base_url().'assets/js/lazysizes.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/js/app.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/js/demo.js'; ?>"></script>
<script src="<?php echo base_url().'assets/js/dropify/dropify.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'; ?>"></script>
<script>
 $(document).ready(function(){  
		$('#xpassword2').on('keyup', function() {
			 if ($('#xpassword').val() == $('#xpassword2').val()) {
					$('#password_result').html("<i class='fa fa-check' style='color:green'></i>"+
					' Password sesuai').css('color', 'green');
						document.getElementById("simpan").disabled = false;
			 }else{
				 		$('#password_result').html('Konfirmasi Password tidak sesuai').css('color', 'red');
			 }	
			});		
});	
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
		});
	});
</script>


</body>
</html>
