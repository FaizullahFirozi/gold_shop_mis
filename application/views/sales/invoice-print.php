
        <div class="row">
          <div class="col-12">
           
			<?php  
				foreach($sales as $row); 
				foreach($customer as $row_customer); 
			?>

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
					<img src="<?= base_url(); ?>assets/images/islamic.jpg" height="100" alt="gold pic">
					<img src="<?= base_url(); ?>assets/images/b.png" height="100" alt="gold pic">
					<img src="<?= base_url(); ?>assets/images/a.jpg" height="100" alt="gold pic">
					<img src="<?= base_url(); ?>assets/images/e.jpg" height="100" alt="gold pic">
					<img src="<?= base_url(); ?>assets/images/d.png" height="100" alt="gold pic">
					<img src="<?= base_url(); ?>assets/images/islamic.jpg" height="100" alt="gold pic">
					<hr>
</div>
              <div class="row">
                <div class="col-12">
                  <h4>
					<i class="fas fa-globe"></i> FRZ-WARDAK.
					
					<small class="float-right text-fuchsia">Date: <?= $row->date_hijri; ?></small>
					<br>
                    <small class="float-right text-fuchsia">Date: <?= $row->date_year . '-' . $row->date_month . '-' . $row->date_day; ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-3 invoice-col">
                  <address  class="text-primary">
                    <strong  class="text-success">شماره تماس</strong><br>
                    +93780002528<br>
                    +93799212970<br>
                    +93748413541<br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-6 invoice-col">
                 
                  <address class="text-center">
                    <h3 class="text-success">دستگاه تحلیل زرگری و تیزاب کاری بهار</h3>
                    <strong class="text-primary">Barhar GOLD TESTTING ENTER</strong><br>
                    <span>ADD: MOMAND MARKIT SECOND FLOOR SHOP NO 3 </span><br>
                    <strong class="text-success">آدرس: شهر کندز مومند مارکیت منزل دوم دوکان نمبر ۳</strong><br>
                  
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-3 invoice-col">
                  <b>Invoice # <?= $row->sale_id; ?></b><br>
                  <br>
                  <b>Order ID:</b> <?= $row->sale_id; ?><br>
                  <b>Payment Due:</b> <?= jdate('Y-m-d ') ?><br>
                </div>
                <!-- /.col -->
			  </div>
			  <br>
			  <br>
			    <div class="row text-primary">
			     	<div class="col-sm-3"><strong>Customer Name: </strong></div>
			     	<div class="col-sm-6 text-center"><strong> <?=  $row_customer->first_name . ' - ' . $row_customer->last_name . ' - ' .  $row_customer->father_name ?> </strong></div>
			     	<div class="col-sm-3 text-right"><strong>اسم مشتری </strong></div>
		    	</div>
              <!-- /.row -->
<hr>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th>English info</th>
                      <th class="text-center">Product</th>
                      <th class="text-right">معلومات دری</th>
                      <th class="text-center">نمبر</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Gold Type </td>
                      <td class="text-center"><?= $row_customer->sample_name; ?></td>
                      <td class="text-right"> نوع طلاع </td>
                      <td class="text-center">1</td>
					</tr>
					<tr>
                      <td>Gold Weight </td>
                      <td class="text-center"><?= $row->gold_weight; ?></td>
                      <td class="text-right"> وزن طلاع </td>
                      <td class="text-center">2</td>
					</tr>
					<tr>
                      <td>Gold Percentage </td>
                      <td class="text-center"><?= $row->gold_percentage; ?></td>
                      <td class="text-right"> فیصدی طلاع </td>
                      <td class="text-center">3</td>
					</tr>
					<tr>
                      <td>Gold Carat </td>
                      <td class="text-center"><?= $row->gold_carat; ?></td>
                      <td class="text-right"> عیار طلاع </td>
                      <td class="text-center">4</td>
					</tr>
					<tr>
                      <td> date - Time </td>
                      <td class="text-center"><?= $row->date_hijri; ?></td>
                      <td class="text-right"> تاریخ - وقت </td>
                      <td class="text-center">5</td>
					</tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
			  <div class="row">
			     	<div class="col-sm-12 text-center text-success"><strong> نوت: امکان غلطی ندارد مگر ذمه داری غلطی هم نیست چونکه تخنیک برقی میباشد قناعت خود را حاصل نماید  </strong></div>
					<br> 
					 <div class="col-sm-12 text-center text-primary"><strong> طلائی تحلیل خریده میشود به نرخ روز </strong></div>
				</div>
				
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?= base_url(); ?>Sales/invoice_print" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
    <!-- /.content -->
	</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

	<script type="text/javascript"> 
	  window.addEventListener("load", window.print());
	  
	</script>



<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?= base_url(); ?>assets/firozi.js"></script>


</body>
</html>
