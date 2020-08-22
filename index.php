
<?php require_once('includes/topbar.php')?>

  <!-- Main Sidebar Container -->
<?php require_once('includes/sidebar.php')?>
    
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-envelope"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Savings Balance</span>
                        <span class="info-box-number">1,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-flag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Loan Balance</span>
                        <span class="info-box-number">410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
          
          
        </div>
        <!-- /.row -->
          <hr>
        <!-- Main row -->
          
              <!-- Small boxes (Stat box) -->
              <div class="row">
                  <!-- ./col -->
                  <div class="col-lg-5 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                          <div class="inner">
                              <h3>Deposit<sup style="font-size: 20px"></sup></h3>

                              <p>Deposit Funds</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                          </div>
                          <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->

                  <div class="col-lg-5 col-6">
                      <!-- small box -->
                      <div class="small-box bg-danger">
                          <div class="inner">
                              <h3>Withdraw</h3>

                              <p>Withdraw Funds</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-bag"></i>
                          </div>
                          <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  
                  <div class="col-lg-5 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                          <div class="inner">
                              <h3>Profile / Account Settings<sup style="font-size: 20px"></sup></h3>

                              <p>Edit Profile</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                          </div>
                          <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
                  <!-- ./col -->

                  <div class="col-lg-5 col-6">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                          <div class="inner">
                              <h3>Transaction History</h3>

                              <p>View Transactions</p>
                          </div>
                          <div class="icon">
                              <i class="ion ion-bag"></i>
                          </div>
                          <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>


              </div>
              <!-- /.row -->
          
          </div>
          
          
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Savings Graph
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            

            <!-- TO DO List -->
            
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
              <div id="sparkline-1" hidden></div>
              <div id="sparkline-2" hidden></div>
              <div id="sparkline-3" hidden></div>

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require_once('includes/footer.php')?>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
