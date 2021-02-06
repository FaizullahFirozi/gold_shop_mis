
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome Dear</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/toastr/toastr.min.css">
	
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page bg-teal" style="background-image: url('<?= base_url(); ?>assets/images/a.jpg');">
<!-- <img src="<?= base_url(); ?>assets/images/a.png" alt=""> -->

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin </b> Gold Shopping</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
			
		<?php 
				if ($this->session->flashdata('msg')) {  echo $this->session->flashdata('msg');  } ?></p>

      <p class="login-box-msg">Sign in to start your session</p>

			<?php					
					echo form_open('users/Auth_login');

						$username = form_input(array('name' => 'username', 'placeholder' => 'Username' , 'class' => 'form-control', 'autocomplete' => 'off'));
						$password = form_password(array('name' => 'password', 'placeholder' => 'Password' , 'class' => 'form-control'));
							// $submit = form_submit('submit', 'login');
					?>
					
							<?= form_error('username','<b style="color:red;">','</b>'); ?>
        <div class="input-group mb-3">
							<?= $username; ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
						</div>
						
          </div>
				</div>
				
							<?= form_error('password','<b style="color:red;">','</b>'); ?>
        <div class="input-group mb-3">
							<?= $password; ?>
					<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      <?= form_close(); ?>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?= base_url(); ?>assets/firozi.js"></script>

<!-- Toastr -->
<script src="<?= base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<!-- codes or for toaster by firozi -->
<script>	 
			$(function() {		
					toastr.options = {
					"closeButton": true,
					"debug": false,
					"positionClass": "toast-top-left",
					"onclick": null,
					"showDuration": "1000",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
			}
				<?php if ($this->session->flashdata("success")) : ?>
					toastr.success( " " , "<?= $this->session->flashdata("success") ?>");
				<?php elseif ($this->session->flashdata("error")) : ?>
					toastr.error( " " , "<?= $this->session->flashdata("error") ?>");
				<?php elseif ($this->session->flashdata("info")) : ?>
					toastr.info( " " , "<?= $this->session->flashdata("info") ?>");
				<?php elseif ($this->session->flashdata("warning")) : ?>
					toastr.warning( " " , "<?= $this->session->flashdata("warning") ?>");
				<?php endif; ?>
			});

</script>


</body>
</html>
