<br>
<br>

<?php //include 'jdf.php'; ?>
<?php 
	foreach($gold_sample as $row);
?>
<?=  form_open(base_url() . 'Gold_sample/update_gold_sample'); ?>
									
								
<div class="card card-dark col-lg-8 offset-2 ">
		    <div class="card-header ">
		      <h3  class="card-title "  > Edit Sample</h3>
		    </div>
			 
      <div class="card-body">
	 							 <input type="hidden" name="sample_id" value="<?= $row->sample_id; ?>" class=" form-control form-control-lg" >
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" name="sample_name" value="<?= $row->sample_name; ?>" dir="rtl" class=" form-control form-control-lg" required autocomplete="off" placeholder="نوم / اسم">
										<?= form_error('sample_name','<i style="color:red;">','</i>'); ?>
									</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Sample Name</label>
								</div>
								
							
								<button type="submit" class="btn btn-primary w-25">Edit Sample</button>
								<button type="reset" class="btn btn-dark">Cancel</button>
				</div>
			</div>
		</div>
	<?= form_close(); ?>
