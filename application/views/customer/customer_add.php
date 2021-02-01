<br>
<br>

<?php //include 'jdf.php'; ?>
<?=  form_open(base_url() . 'Customer/insert_customer'); ?>
									
								
<div class="card card-dark col-lg-8 offset-2 ">
		    <div class="card-header ">
		      <h3  class="card-title "  >Add Customer</h3>
		    </div>
			 
      <div class="card-body">
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" autofocus name="first_name" dir="rtl" class=" form-control form-control-lg" autocomplete="off" placeholder="نوم / اسم">
										<?= form_error('first_name','<i style="color:red;">','</i>'); ?>
									</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" name="last_name" dir="rtl" class=" form-control form-control-lg" autocomplete="off" placeholder="تخلص">
									</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" name="father_name" dir="rtl" class=" form-control form-control-lg" autocomplete="off" placeholder="د پلار نوم / نام پدر">
										<?= form_error('father_name','<i style="color:red;">','</i>'); ?>
									</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Father Name</label>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="number" name="phone" dir="rtl" class=" form-control form-control-lg" autocomplete="off" placeholder="شماره تماس">
										<?= form_error('phone','<i style="color:red;">','</i>'); ?>
									</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
								</div>
							
								<button type="submit" class="btn btn-primary w-25">Save Customer</button>
								<button type="reset" class="btn btn-dark">Cancel</button>
				</div>
			</div>
		</div>
	<?= form_close(); ?>
