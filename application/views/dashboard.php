	<?php 
	foreach($today_sales as $today_sale);
	foreach($month_sales as $month_sale);
	foreach($year_sales as $year_sale);
	foreach($total_sales as $total_sale);
	foreach($total_customers as $total_customer);
	foreach($total_gold_samples as $total_gold_sample);
	  ?>
		
<div class="position-relative p-3  style="height: 180px" >
                      <div class="ribbon-wrapper ribbon-xl" style="margin-right:10px; margin-top:10px">
                        <div class="ribbon bg-danger text-xl">
												<?=  jdate(' Y - m - d '); ?>
                        </div>
                      </div>
                      </div>

		<h1 class="col-sm-6 offset-3 text-center">								
				<?php 
						if ($this->session->flashdata('msg')) {  echo $this->session->flashdata('msg');  } 
						?>
		</h1>


<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard &nbsp;&nbsp;&nbsp;&nbsp;  <b class="text-danger badge badge">  <?=  jdate(' Y - m - d '); ?></b></h1>
					</div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
			  <li class="breadcrumb-item active">Dashboard v1</li>  
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
	</div>
	
                   
	<!-- Small boxes (Stat box) -->
		<!-- Info boxes -->
		<div class="row">
			
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Today Sales </span>
                <span class="info-box-number"><?=  $today_sale->sale_id_count; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
					<!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Monthly Sales </span>
                <span class="info-box-number"><?=  $month_sale->sale_id_count; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
					<!-- /.col -->
					<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-gradient-purple elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Year Sales </span>
                <span class="info-box-number"><?=  $year_sale->sale_id_count; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
					<!-- /.col -->
        
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Sales</span>
                <span class="info-box-number"># <?=  $total_sale->total; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
		</div>
	<!-- /.row -->

<!-- Small boxes (Stat box) -->
	<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3># <?= $total_customer->total; ?></h3>

                <p>Total Customer</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?= base_url(); ?>Customer/list_customer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3># <?=  $total_sale->total; ?><sup style="font-size: 20px"></sup></h3>

                <p>Total Sale</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url(); ?>Sales/list_sale" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>+ <?= $total_gold_sample->total; ?></h3>

                <p>Total Gold Sample</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= base_url(); ?>Gold_sample/list_gold_sample" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>+ <?= $total_customer->total; ?></h3>

                <p>Customer List</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url(); ?>Customer/list_customer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
<!-- /.row -->


<img  src="<?=base_url(); ?>assets/images/a.jpg" width="429" alt="">
						<img  src="<?=base_url(); ?>assets/images/e.jpg" width="429" alt="">
						<img  src="<?=base_url(); ?>assets/images/b.png" width="429" alt="">
						<!-- <img  src="<?=''//base_url(); ?>assets/images/d.png" width="429" alt=""> -->
						<!-- <img  src="<?='' //base_url(); ?>assets/images/c.jpg" width="429" alt=""> -->




<div class="card card-warning card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Toastr Examples
                </h3>
              </div>
              <div class="card-body">
                <button type="button" clicked="true" class="btn btn-success toastrDefaultSuccess">
                  Launch Success Toast
                </button>
                <button type="button" class="btn btn-info toastrDefaultInfo">
                  Launch Info Toast
                </button>
                <button type="button"  class="btn btn-danger toastrDefaultError">
                  Launch Error Toast
                </button>
                <button type="button" class="btn btn-warning toastrDefaultWarning">
                  Launch Warning Toast
                </button>
                <div class="text-muted mt-3">
                  For more examples look at <a href="">https://codeseven.github.io/toastr/</a>
                </div>
              </div>
              <!-- /.card -->
            </div>
					