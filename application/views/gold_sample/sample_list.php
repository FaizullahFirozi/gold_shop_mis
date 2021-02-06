<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" >
<div class="wrapper">
<br>
    <!-- Main content -->
    <section class="content" >
      <div class="row">
        <div class="col-6 offset-3 mt-5">
          <div class="card">
          
          <!-- /.card -->
          <div class="card">
            <div class="card-header text-center"> 
						<?= anchor('Gold_sample/add_gold_sample', 'Add Sample', array('class' => 'btn btn-outline-info col-lg-2 ')); ?>

              <h3 class="card-title">All Shop History <b class="text-maroon"> To Day : (<?=  jdate(' Y-m-d '); ?>)</b></h3>
            </div>
            <!-- /.card-header -->
					<h4 class="col-sm-8 offset-2">								
						<?php 
						if($this->session->flashdata('msg')) { echo $this->session->flashdata('msg'); } 
						?>
						</h4>

            <div class="card-body">
              <table  id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
									<th class="text-center">Action</th>
									<th class="text-center">نام سمپل</th>
                  <th class="text-center" >ایدی سمپل</th>
                </tr>
                </thead>
                <tbody>

	<?php  foreach($gold_sample as $row):  ?>
				<tr>				 
									<td class="text-center py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="#"  id="<?=  $row->sample_id; ?>" class="delete_data_wardak text-danger text-sm"><i class="fas fa-trash">&nbsp;&nbsp;</i></a>&nbsp;&nbsp;
                        <a href="<?= base_url(); ?>Gold_sample/edit_sample/<?= $row->sample_id; ?>" class="text-sm"><i class="fas fa-edit"> Edit</i></a>
                      </div>
                    </td> 
					  			<td class="text-center"><?= $row->sample_name; ?></td>
                  <td class="text-center"><?= $row->sample_id; ?></td>
                </tr>
	<?php endforeach; ?>
                </tbody>
                <tfoot>
				<tr>
									<th class="text-center">Action</th>
									<th class="text-center">Sample Name</th>
                  <th  class="text-center">Sample ID</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>

<!-- Toastr -->
<script src="<?= base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- delete_data_wardak -->
<script>
$(document).ready(function(){
	$('.delete_data_wardak').click(function(){
			var id = $(this).attr("id");
			if(confirm("Are you Sure Want to Delete this?"))
			{
						window.location = "<?= base_url(); ?>Gold_sample/delete_gold_sample/"+id;
			} else {
							return false;
			}
	});
});
</script>


<!-- codes or for toaster by firozi -->
<script>	 
			$(function() {		
					toastr.options = {
					"closeButton": true,
					"debug": false,
					"positionClass": "toast-top-right",
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
