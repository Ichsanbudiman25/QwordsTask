@extends('administrator/layouts.mainLayoutAdmin');

<!DOCTYPE html>
<html>
<head>
  <!-- scanner qrcode -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="/admin/uploads/logo_admin.png">
  <title>QwordsTask Administrator | @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/admin/dist/css/skins/_all-skins.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- ARTIKEL -->

  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>QT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>QWORDS </b>TASK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Ichsan Budiman</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 Ichsan Budiman <br> 
                    Super Admin
                    since Jan. 2023
                </small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">SA2023001</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Owner</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Aktif</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/admin/admin/Dashboard_administrator/ubah_profile" class="btn btn-default btn-flat">Ganti Foto</a>
                </div>
                <div class="pull-right">
                  <a href="/admin/admin/logout" class="btn btn-default btn-flat">Sign out</a>
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
      <div class="user-panel"  style="height:60px">
        <div class="pull-left image">
          <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"  style="height:45px; width:45px">
        </div>
        <div class="pull-left info">
          <p>Ichsan Budiman</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
            <li><a href="/admin/admin/Dashboard"><i class="fa fa-home"></i>Dashboard Admin</a></li>

            <li><a href="'.base_url().'admin/Dashboard_administrator"><i class="fa fa-users"></i>Data Administrator</a></li>
            <li><a href="/admin/admin/Dashboard_pelanggan"><i class="fa fa-users"></i>Data Pelanggan</a></li>
            <li><a href="/admin/admin/Dashboard_artikel"><i class="fa fa-book"></i>Berita / Artikel</a></li>
            <li><a href="/admin/admin/Dashboard_produk"><i class="fa fa-box"></i>Produk</a></li>
            <li><a href="/admin/admin/Dashboard_requests_listrik"><i class="fa fa-flash"></i>Requests Pemasangan</a></li>
            <li><a href="/admin/admin/Dashboard_requests_topup"><i class="fa fa-money"></i>Requests Top Up</a></li>
            <li><a href="/admin/admin/Dashboard_survey_pelanggan"><i class="fa fa-star"></i>Survey Pelanggan</a></li>
            <li><a href="/admin/admin/Dashboard_absensi"><i class="fa-sharp fa-solid fa-person-chalkboard"></i> Absensi</a></li>
            <li><a href="'.base_url().'admin/Dashboard_rekap_absensi"><i class="fa-sharp fa-solid     fa-person-chalkboard"></i> Rekap Absensi</a></li>
            <li><a href="/admin/admin/Dashboard_absensi_FR"><i class="fa-sharp fa-solid fa-person-chalkboard"></i> Absensi Face Recognition</a></li>
            <li><a href="http://localhost/belajarci/"><i class="fa fa-circle"></i>Kunjungi Situs</a></li>
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
        Quick Information
        <small>ROTHSCHILD GENERATION</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard Admin</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- =========================================================== -->

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>0</h3>
              <p>Pesanan Baru</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>0</h3>
              <p>Produk</p>
            </div>
            <div class="icon">
              <i class="fa fa-box"></i>
            </div>
            <a href="" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>0</h3>
              <p>Pelanggan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>0</h3>
              <p>Requests Listrik</p>
            </div>
            <div class="icon">
              <i class="fa fa-flash"></i>
            </div>
            <a href="" class="small-box-footer">
                Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>0</h3>
              <p>Requests Top Up</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="" class="small-box-footer">
                Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>0/10</h3>
              <p>Survey Pelanggan</p>
            </div>
            <div class="icon">
              <i class="fa fa-star"></i>
            </div>
            <a href="" class="small-box-footer">
                Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>0</h3>
              <p>Berita / Artikel</p>
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="" class="small-box-footer">
                Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>Situs</h3>
              <p>Kunjungi Situs Rothchild</p>
            </div>
            <div class="icon">
              <i class="fa  fa-long-arrow-right"></i>
            </div>
            <a href="" class="small-box-footer">
                Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

     

      <!-- =========================================================== -->


      <h2 class="page-header">Social Media Follower Information</h2>
      <div class="row">
        <a href="https://www.youtube.com/@1stcoderider958" target="_Blank">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa-brands fa-youtube"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">YOUTUBE</span>
                <span class="info-box-number">0</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                    <span class="progress-description">
                        Rothchild Generation
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
            </div>
        <!-- /.col -->
        <a href="https://www.instagram.com/kilatinformatika" target="_Blank">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa-brands fa-instagram"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">INSTAGRAM</span>
              <span class="info-box-number">1135</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    RothchildGen23
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
        </div>
        <!-- /.col -->
        <a href="" target="_Blank">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa-brands fa-twitter"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TWITTER</span>
              <span class="info-box-number">760</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    RothchildGeneration
                  </span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <a href="https://www.tiktok.com/@ichsanbudimanp" target="_Blank">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa-brands fa-tiktok"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TIKTOK</span>
              <span class="info-box-number">6825</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Rothchild Generation
                  </span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>



    <!-- /.content-wrapper -->
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2023 <a href="https://instagram.com/kilatinformatika">Rothchild Generation</a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
<script src="/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>





<!-- CK Editor -->
<script src="/admin/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
