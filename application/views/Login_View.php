<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
  <!-- Telufi Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("assets/dist/css/skins/_all-skins.min.css");?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url("assets/plugins/iCheck/flat/blue.css");?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap.css");?>">
  <style type="text/css">
   .error {
     color: red;
   }
</style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
 </head>
 <body class="hold-transition login-page">
   <?php echo form_open('VerifyLogin'); ?>
<div class="login-box">
  <div class="login-logo">
    <a href="../../index.php"><b>YaTis</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your work</p>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="passowrd" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4 pull-right">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <div class="col-xs-6">
          <br/>
          <a href="register" class="text-center">Register a new Admin</a>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <?php
    echo "<p class=red>";
    echo validation_errors();
    echo "</p>";
    ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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
      $('#example1').DataTable();
</script>

 </body>
</html>
