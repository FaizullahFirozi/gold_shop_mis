

<div class="row offset-5 mt-5">
<div class="login-box">
  <div class="login-logo">
    <b>Wardak </b>FRZ -- Change Your Password
	</div>
	<?php 
if ($this->session->flashdata('msg')) {  echo $this->session->flashdata('msg');  } ?></p>

  <!-- /.login-logo -->
  <div class="card">
		
    <div class="card-body login-card-body ">
      <p class="login-box-msg">						<!--BEGIN NOTIFICATION-->
<!-- form start/ -->
	 <?= form_open('users/changePasswordByUser'); ?>


	 <?= form_error('old_pass','<b style="color:red;">','</b>'); ?>
        <div class="input-group mb-3">
          <input type="password" name="old_pass" class="form-control" placeholder="Old Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
					</div>
		</div>
		
	 <?= form_error('new_pass','<b style="color:red;">','</b>'); ?>
		<div class="input-group mb-3">
          <input type="password" name="new_pass" class="form-control" placeholder="New Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
	 <?= form_error('retype_pass','<b style="color:red;">','</b>'); ?>
        <div class="input-group mb-3">
          <input type="password" name="retype_pass" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
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
