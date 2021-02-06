<br>
<br>

<?php //include 'jdf.php'; ?>
<?=  form_open(base_url() . 'Sales/insert_sale'); ?>
									
									<?php 
										if($this->uri->segment(2) == 'inserted')
										{
											echo '<h1 style="text-align:center; color:red;">Data Insertd</h1>';
										}
									?>
								
<div class="card card-dark col-lg-8 offset-2 ">
		    <div class="card-header ">
		      <h3  class="card-title "  >Sale Information</h3>
		    </div>
			 
      <div class="card-body">
									<div class="form-group">
										<div class="card-header">
										<h3  class="card-title text-danger" ><b> # <?= $sale_id; ?> نمبر بل </b></h3>
										</div>
									</div>
									<div class="form-group row " >
									<label for="inputEmail3" class="col-sm-0 col-form-label text-primary">میلادي</label>
									 <div class="col-sm-2" >
							  	 <input type="number" name="date_year"  value="<?= date('Y'); ?>"  class="form-control form-control-md text-primary"   placeholder="تاریخ">
									<?= form_error('date_year','<i style="color:red;">','</i>'); ?>
									 </div>
									<div class="col-sm-2 " >
							  	 <input type="number" name="date_month" value="<?= date('m'); ?>"  class="form-control form-control-md text-primary"   placeholder="تاریخ">
									<?= form_error('date_month','<i style="color:red;">','</i>'); ?>
									 </div>
									<div class="col-sm-2" >
							  	 <input type="number" name="date_day" value="<?= date('d'); ?>"  class="form-control form-control-md text-primary"   placeholder="تاریخ">
									<?= form_error('date_day','<i style="color:red;">','</i>'); ?>
								   </div> 
								   <label for="inputEmail3" class="col-sm-0 col-form-label text-info">هجری</label>
									<div class="col-sm-3" >
							  	 <input type="text" name="date_hijri"  value="<?= jdate('Y-m-d'); ?>"  class="form-control form-control-md text-info"   placeholder="تاریخ">
									 </div>
								<!-- </div>  -->
									 </div>
								<div class="form-group row">
									<div class="col-sm-10">
									<input type="text" name="sr_no" dir="rtl" class="form-control form-control-md" autocomplete="off" autofocus  placeholder="سریال نمبر">
									 <?= form_error('sr_no','<i style="color:red;">','</i>'); ?>
									 </div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Sr No</label>
								</div>
							

								<div class="form-group row">
									<div class="col-sm-10">
												<select dir="rtl" name="customer_id" class="form-control custom-select">
													<option selected="" disabled="">نوم / اسم مشتری تخلص و نام پدر</option>
												<?php foreach($customer as $row_customer): ?>
													<option  value="<?= $row_customer->customer_id; ?>"><?=  $row_customer->first_name . ' - ' . $row_customer->last_name . ' - ' .  $row_customer->father_name ?></option>												
												<?php endforeach; ?>
												</select>
											</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
									<?= form_error('customer_id','<i style="color:red;">','</i>'); ?>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
												<select dir="rtl" name="sample_id" class="form-control custom-select">
													<option selected="" disabled="">Select one </option>
												<?php foreach($gold_sample as $row_gold_sample): ?>
													<option value="<?= $row_gold_sample->sample_id ?>"><?= $row_gold_sample->sample_name ?></option>
												<?php endforeach; ?>
												</select>
											</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Gold Sample</label>
									<?= form_error('sample_id','<i style="color:red;">','</i>'); ?>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" name="gold_weight" id="gold_weight" dir="rtl" class=" form-control form-control-lg" autocomplete="off" placeholder="وزن">
										<?= form_error('gold_weight','<i style="color:red;">','</i>'); ?>
									</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Gold Weight</label>
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
										<input type="text" name="gold_percentage" id="gold_percentage" dir="rtl" class="firozi_wardak form-control form-control-lg" autocomplete="off" placeholder="فیصدی">
										<?= form_error('gold_percentage','<i style="color:red;">','</i>'); ?>
									</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Gold Percentage</label>
								</div>
								<div class="form-group row ">
									<div class="col-sm-10 ">
										<input type="" name="gold_carat" id="gold_carat" readonly="readonly"  dir="rtl" class="firozi_wardak form-control form-control-lg"   autocomplete="off" placeholder="عیار">
										<?= form_error('gold_carat','<b style="color:red;">','</b>'); ?>
									</div>
									<label for="inputEmail3" class="col-sm-2 col-form-label">Gold Carat</label>
								</div>
								<button type="submit" class="btn btn-primary w-25">Save Sale</button>
								<button type="reset" class="btn btn-dark">Cancel</button>
				</div>
			</div>
		</div>
		<script src="<?= base_url(); ?>assets/firozi.js"></script>
		
	<?= form_close(); ?>
<!-- /.form-group -->

<!-- 
<script type="text/javascript">
	Calendar.setup({
        inputField      :    "save_date",
        ifFormat        :    "%Y-%m-%d",
        showsTime       :    false,
        timeFormat      :    "24"
    });
</script> -->


