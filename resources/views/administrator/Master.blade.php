@include('administrator/layouts/top')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
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
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>0</h3>
              <p>Jumlah Pesanan</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a class="small-box-footer">
              INFORMASI TOTAL PESANAN
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$countProduk}}</h3>
              <p>Produk</p>
            </div>
            <div class="icon">
              <i class="fa fa-box"></i>
            </div>
            <a href="/administrator/dashboard_produk" class="small-box-footer">
              Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$countArtikel}}</h3>
              <p>Berita / Artikel</p>
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="/administrator/dashboard_artikel" class="small-box-footer">
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
              <p>Kunjungi QwordsTask</p>
            </div>
            <div class="icon">
              <i class="fa  fa-long-arrow-right"></i>
            </div>
            <a href="/" class="small-box-footer">
                Selengkapnya <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

     

      <!-- =========================================================== -->


      <h2 class="page-header">Social Media Follower Information - API</h2>
      <div class="row">
        <a href="https://www.youtube.com/@1stcoderider958" target="_Blank">
            <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa-brands fa-youtube"></i></span>

                <div class="info-box-content">
                <span class="info-box-text">YOUTUBE</span>
                <span class="info-box-number">{{$youtube}}</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                    <span class="progress-description">
                        1stcoderider
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>

          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    </section>
    <!-- /.content -->
  </div>

  @include('administrator.layouts.bottom')