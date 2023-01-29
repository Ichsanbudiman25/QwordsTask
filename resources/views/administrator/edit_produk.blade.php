@include('administrator/layouts/top')
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Produk
        <small>ROTHSCHILD GENERATION</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Berita / Produk</a></li>
        <li class="active">Edit Produk</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Produk</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form role="form" action="/administrator/dashboard_produk/update/{{$Produk->id_produk}}" method="POST" enctype="multipart/form-data">
            @method('put')    
            @csrf
            <div class="box-body">
            <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Produk" name="nama_produk" value="{{$Produk->nama_produk}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Produk</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jumlah Harga" name="harga_produk" value="{{$Produk->harga_produk}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Produk</label>
                  <select name="kode_jenis_produk" id="exampleInputEmail1" required>
                    <option value="1" <?php if($Produk->kode_jenis_produk == 1){echo 'selected';}?>>Hosting</option>
                    <option value="2" <?php if($Produk->kode_jenis_produk == 2){echo 'selected';}?>>Domain</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi Produk</label>
                  <textarea class="form-control" id="exampleInputEmail1" name="deskripsi_produk" rows="20" required>
{{$Produk->deskripsi_produk}}
                  </textarea >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->

@include('administrator.layouts.bottom')