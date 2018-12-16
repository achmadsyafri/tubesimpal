<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>YaTis</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css");?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/AdminLTE.min.css");?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/skins/_all-skins.min.css");?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url("assets/plugins/iCheck/flat/blue.css");?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.css");?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url().index_page().'/HomeController'?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Y</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>YaTis</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url("#");?>"  class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url("assets/dist/img/user2-160x160.jpg");?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $nama; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url("assets/dist/img/user2-160x160.jpg");?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nama; ?> - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="HomeController/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("assets/dist/img/user2-160x160.jpg");?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="HomeController"><i class="fa fa-circle-o"></i> Pembayaran Siswa</a></li>
            <li><a href="DataPemasukanC"><i class="fa fa-circle-o"></i> Pemasukan Sekolah</a></li>
            <li><a href="DataPengeluaranC"><i class="fa fa-circle-o"></i> Pengeluaran</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="PembayaranController">
            <i class="fa fa-edit"></i> <span>Pembayaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="PemasukanController">
            <i class="fa fa-edit"></i> <span>Pemasukan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="PengeluaranController">
            <i class="fa fa-edit"></i> <span>Pengeluaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Pelaporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="Pelaporan_BulananC"><i class="fa fa-circle-o"></i> Laporan Bulanan</a></li>
            <li><a href="PembukuanController"><i class="fa fa-circle-o"></i> Pembukuan Tahunan</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Laporan Bulanan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <!-- <section class="col-lg-6 connectedSortable">

        </section> -->
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-12 connectedSortable">
          <form action="insertData" method="post">
          <!-- Map box -->

          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pembayaran Siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Pembayaran</th>
                  <th>NIM</th>
                  <th>Tanggal</th>
                  <th>Jumlah</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $cekcek=0;
                      foreach ($tes as $as) {
                  ?>
                      <tr>
                        <td><?php echo $as->id_pembayaran; ?></td>
                        <td><?php echo $as->nim; ?></td>
                        <td><?php echo $as->tanggal; ?></td>
                        <td><?php echo $as->jumlah; ?></td>
                        <td style="font-size:16px;"><span class="label label-success"><?php echo $as->status; ?></span></td>
                      </tr>
                   <?php
                      $cekcek = $cekcek + $as->jumlah;
                      }
                      ?>
                </tbody>
              </table>
              <h4 class="box-title">Total Pembayaran Siswa Bulan  <?php echo $tanga ?> :
                          <span class="label label-warning" style="font-size:16px;"> Rp. <?php echo number_format($cekcek) ?> </span> </h3>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemasukan Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Pemasukan</th>
                  <th>Perihal</th>
                  <th>Tanggal</th>
                  <th>Jumlah</th>
                  <th>Pemberi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $cakcak = 0;
                      foreach ($tes1 as $as) {
                  ?>
                      <tr>
                        <td><?php echo $as->id_pemasukan; ?></td>
                        <td><?php echo $as->perihal; ?></td>
                        <td><?php echo $as->tanggal; ?></td>
                        <td><?php echo $as->jumlah; ?></td>
                        <td style="font-size:16px;"><span class="label label-success"><?php echo $as->pemberi; ?></span></td>
                      </tr>
                   <?php
                      $cakcak = $cakcak + $as->jumlah;
                    }
                 ?>
                </tbody>
              </table>
              <h4 class="box-title">Total Pemasukan Sekolah Bulan  <?php echo $tanga ?> :
                          <span class="label label-warning" style="font-size:16px;"> Rp. <?php echo number_format($cakcak) ?> </span> </h3>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengeluaran Sekolah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Pengeluaran</th>
                  <th>Perihal</th>
                  <th>Tanggal</th>
                  <th>Jumlah</th>
                  <th>Pengaju</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                      $cikcik = 0;
                      foreach ($tes2 as $as) {
                  ?>
                      <tr>
                        <td><?php echo $as->id_pengeluaran; ?></td>
                        <td><?php echo $as->perihal; ?></td>
                        <td><?php echo $as->tanggal; ?></td>
                        <td><?php echo $as->jumlah; ?></td>
                        <td style="font-size:16px;"><span class="label label-success"><?php echo $as->pengaju; ?></span></td>
                      </tr>
                   <?php
                   $cikcik = $cikcik + $as->jumlah;
                 } ?>
                </tbody>
              </table>
              <h4 class="box-title">Total Pengeluaran Sekolah Bulan  <?php echo $tanga ?> :
                          <span class="label label-danger" style="font-size:16px;"> Rp. <?php echo number_format($cikcik) ?> </span> </h4>
            </div>
            <div class="box-footer">
              <input type="hidden" name="totalpmb" value="<?php echo $cekcek ?>"/>
              <input type="hidden" name="totalpms" value="<?php echo $cakcak ?>"/>
              <input type="hidden" name="totalpng" value="<?php echo $cikcik ?>"/>
              <input type="hidden" name="bulan" value="<?php echo $tanga ?>"/>
              <button type="submit" class="btn btn-info pull-right"><span class="glyphicon glyphicon-print"></span> &nbsp; PRINT</button>
            </div>
          </form>
            <!-- /.box-body -->
          </div>


        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2017 YaTis.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js");?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.min.js");?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js");?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url("assets/plugins/slimScroll/jquery.slimscroll.min.js");?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets/plugins/fastclick/fastclick.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/dist/js/app.min.js");?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets/dist/js/demo.js");?>"></script>
<script type="text/javascript">
      $('#example3').DataTable();
      $('#example2').DataTable();
      $('#example1').DataTable();
</script>

</body>
</html>
