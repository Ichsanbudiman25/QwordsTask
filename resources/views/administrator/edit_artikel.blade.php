@include('administrator/layouts/top')
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Artikel
        <small>ROTHSCHILD GENERATION</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Berita / Artikel</a></li>
        <li class="active">Edit Artikel</li>
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
              <h3 class="box-title">Data Artikel</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form role="form" action="/administrator/dashboard_artikel/update/{{$Artikel->id_artikel}}" method="POST" enctype="multipart/form-data">
            @method('put')    
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Artikel</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul Artikel" name="judul_artikel" value="{{$Artikel->judul_artikel}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Penulis Artikel</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Penulis" name="penulis_artikel" value="{{$Artikel->penulis_artikel}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar Artikel</label><br>
                  <center>
                      <img src="/images/{{$Artikel->gambar_artikel}}" width="500px" alt="">

                  </center>
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Ganti Gambar Artikel</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Masukan Gambar Artikel" name="gambar_artikel" value="{{$Artikel->gambar_artikel}}" required>
                </div> -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">EDITOR ARTIKEL
                <small>QwordsTask</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                    <textarea id="editor1" name="isi_artikel" rows="10" cols="80" required>
                        {{$Artikel->isi_artikel}}
                    </textarea>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Tagar Artikel</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Tagar Artikel" name="tagar_artikel">
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ganti Gambar Artikel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/administrator/dashboard_artikel/update_gambar_artikel/{{$Artikel->id_artikel}}" method="POST" enctype="multipart/form-data">
            @method('put')    
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih gambar yang Ingin Diunggah</label>
                  <input type="file" class="form-control" id="exampleInputEmail1" name="gambar_artikel" size="20" required>
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