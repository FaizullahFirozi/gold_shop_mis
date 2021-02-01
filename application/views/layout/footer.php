      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar bg-warning control-sidebar-d-flex border ">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Hello Dear</h5>
      <p ><?= $this->session->userdata('full_name'); ?></p>
			<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Admin System
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>Users/logout" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>Users/changeUserName" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<span class="fas fa-users"></span>
									<p> Change Name</p>
                </a>
							</li>
							<li class="nav-item">
                <a href="<?= base_url(); ?>Users/change_password" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<span class="fas fa-lock"></span>
									<p> Change Password</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
		
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      my number 0780002528
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-<?= date('Y'); ?> <a href="https://www.facebook.com/faizullah.firozi.wardak">Faizullah firozi</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>

<!-- SweetAlert2 -->
<script src="<?= base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>

<!-- <script src="<?= base_url(); ?>assets/firozi.js"></script> -->



</body>
</html>
