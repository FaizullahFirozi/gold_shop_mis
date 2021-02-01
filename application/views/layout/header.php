<?php include 'jdf.php' ?>
<?php 
// this is for open or close menus or submenu
		$first_segment = $this->uri->segment(1);
		$second_segment = $this->uri->segment(2);
		$third_segment = $this->uri->segment(3);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?= $title; ?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
	<!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
<!-- jQuery -->
	<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/firozi.js"></script>
	
	<script type="text/javascript" src="<?= base_url(); ?>assets/cal/calendar.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/cal/calendar-en.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/cal/calendar-setup.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini <?php if($first_segment == 'Users') echo 'control-sidebar-slide-open'; ?> ">
	
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>Dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>Sales/list_sale" class="nav-link">Sale List</a>
      </li>
			 <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>Sales/new_sale" class="nav-link"> Add Sale</a>
      </li>
			<li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>Customer/list_customer" class="nav-link">Customer List</a>
      </li>
			<li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>Customer/add_customer" class="nav-link">Add Customer</a>
      </li>
			<li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>Gold_sample/list_gold_sample" class="nav-link">Gold Sample List</a>
      </li>
		</ul>
		

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
		<li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url(); ?>Users/logout" class="nav-link">Logout</a>
      </li>
      
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
	</nav>
	
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a  class="brand-link">
      <img src="<?= base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Gold Shopping</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a  class="d-block"><?= $this->session->userdata('full_name'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
					 <li class="nav-item">
            <a href="<?= base_url(); ?>Dashboard" class="nav-link <?php if($first_segment == 'Dashboard') echo 'active'; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>	
              <p>
                Dashboard 
              </p>
            </a>
          </li>
					 
					 <!-- Customer section-->
					<li class="nav-header"></li>
					<li class="nav-item has-treeview  <?php if($second_segment == 'list_customer' OR $second_segment == 'add_customer'  OR $second_segment == 'insert_customer' OR $second_segment == 'edit_customer' OR $second_segment == 'update_customer') echo 'menu-open'; ?>">
            <a href="#" class="nav-link <?php if($first_segment == 'Customer') echo 'active'; ?>">
							<i class="nav-icon fas fa-users"></i>
							<i class="right fas fa-angle-left"></i>
							
              <p>
								Customer
              </p>
						</a>
						
						
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>Customer/add_customer" class="nav-link  <?php if($second_segment == 'add_customer' OR $second_segment == 'insert_customer') echo 'active'; ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Customer</p>
                </a>
              </li>
							<li class="nav-item">
                <a href="<?= base_url(); ?>Customer/list_customer" class="nav-link  <?php if($second_segment == 'list_customer' OR $second_segment == 'update_customer') echo 'active'; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Customer</p>
                </a>
              </li>
            </ul>
          </li>
						
					 <!-- Sale section-->
					<!-- <li class="nav-header">SALE SECTION</li> -->
					 <li class="nav-item has-treeview  <?php if($second_segment == 'new_sale' OR $second_segment == 'list_sale' OR $second_segment == 'edit_sale' OR $second_segment == 'update_sale' OR $second_segment == 'invoice') echo 'menu-open'; ?>">
            <a href="#" class="nav-link <?php if($first_segment == 'Sales') echo 'active'; ?>">
							<i class="nav-icon fas fa-shopping-cart"></i>
							<i class="right fas fa-angle-left"></i>
							
              <p>
								Sales
              </p>
						</a>
						
						
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>Sales/new_sale" class="nav-link  <?php if($second_segment == 'new_sale') echo 'active'; ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sale</p>
                </a>
              </li>
							<li class="nav-item">
                <a href="<?= base_url(); ?>Sales/list_sale" class="nav-link  <?php if($second_segment == 'list_sale' OR $second_segment == 'update_sale') echo 'active'; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sale History</p>
                </a>
              </li>
            </ul>
          </li>
					
					 <!-- Gold sample section-->
					<!-- <li class="nav-header">CUSTOMER SECTION</li> -->
					<li class="nav-item has-treeview  <?php if($second_segment == 'list_gold_sample' OR $second_segment == 'add_gold_sample' OR $second_segment == 'edit_sample' OR $second_segment == 'insert_gold_sample' OR $second_segment == 'update_gold_sample') echo 'menu-open'; ?>">
            <a href="#" class="nav-link <?php if($first_segment == 'Gold_sample') echo 'active'; ?>">
							<i class="nav-icon fas fa-bullhorn"></i>
							<i class="right fas fa-angle-left"></i>
							
              <p>
								Gold Sample
              </p>
						</a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>Gold_sample/add_gold_sample" class="nav-link  <?php if($second_segment == 'add_gold_sample' OR $second_segment == 'insert_gold_sample') echo 'active'; ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Gold Sample</p>
                </a>
              </li>
							<li class="nav-item">
                <a href="<?= base_url(); ?>Gold_sample/list_gold_sample" class="nav-link  <?php if($second_segment == 'list_gold_sample' OR $second_segment == 'update_gold_sample') echo 'active'; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Gold Sample</p>
                </a>
              </li>
            </ul>
          </li>
					
					 <!-- Setting section-->
					<!-- <li class="nav-header">CUSTOMER SECTION</li> -->
					<li class="nav-item has-treeview  <?php if($second_segment == 'changeUserName' OR $second_segment == 'change_password' OR $second_segment == 'changeUserNameByUser') echo 'menu-open'; ?>">
            <a href="#" class="nav-link <?php if($first_segment == 'Users') echo 'active'; ?>">
							<i class="nav-icon fas fa-cogs"></i>
							<i class="right fas fa-angle-left"></i>
							
              <p>
								Setting
              </p>
						</a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>Users/changeUserName" class="nav-link  <?php if($second_segment == 'changeUserName') echo 'active'; ?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change User Name</p>
                </a>
              </li>
							<li class="nav-item">
                <a href="<?= base_url(); ?>Users/change_password" class="nav-link  <?php if($second_segment == 'change_password') echo 'active'; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
							<li class="nav-item">
                <a href="<?= base_url(); ?>Users/logout" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
					
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

