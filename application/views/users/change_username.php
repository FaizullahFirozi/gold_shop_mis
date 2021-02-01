<?php 
	foreach($users as $row);
			 ?>
<div class="row offset-5 mt-5 ">
<div class="login-box">
<div class="login-logo">
     Change Your Name
	</div>
	<?php 
if ($this->session->flashdata('msg')) {  echo $this->session->flashdata('msg');  } ?></p>

  <!-- /.login-logo -->
  <div class="card">
		
    <div class="card-body login-card-body bg-gradient-olive">
			<p class="login-box-msg">						<!--BEGIN NOTIFICATION-->
			<span>Change Your Username!</span>
		
				<!--BEGIN NOTIFICATION-->
<!-- form start/ -->
	 <?= form_open('users/changeUserNameByUser'); ?>


	 <?= form_error('password','<b style="color:red;">','</b>'); ?>
        <div class="input-group mb-3">
          <input type="password" name="password" autocomplete="off" class="form-control" placeholder="Enter Your Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
					</div>
		</div>
		
	 <?= form_error('full_name','<b style="color:red;">','</b>'); ?>
        <div class="input-group mb-3">
          <input type="text" name="full_name" autocomplete="off"  value="<?= $row->full_name; ?>" class="form-control" placeholder="Your Full Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-outline-warning btn-block">Change Name</button>
          </div>
          <!-- /.col -->
        </div>
      <?= form_close(); ?>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>



