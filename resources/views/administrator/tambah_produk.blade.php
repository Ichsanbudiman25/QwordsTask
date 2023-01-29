@include('administrator/layouts/top')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data Produk
        <small>QwordsTask</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li><a href="#">Data Anggota</a></li>
        <li class="active">Tambah Data Produk</li>  
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Produk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/administrator/dashboard_produk/store" method="POST">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Produk" name="nama_produk" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Produk</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah Harga" name="harga_produk" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Produk</label>
                  <select name="kode_jenis_produk" id="exampleInputEmail1" required>
                    <option value="1">Hosting</option>
                    <option value="2">Domain</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi Produk</label>
                  <textarea class="form-control" id="exampleInputEmail1" name="deskripsi_produk" rows="20" required></textarea >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@include('administrator.layouts.bottom')