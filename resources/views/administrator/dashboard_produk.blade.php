@include('administrator/layouts/top')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Produk
        <small>QwordsTask</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- <div class="box-header">

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <span style="text-align:left;"></span>
                </div>   


                <div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <span style="text-align:left;"></span>
                </div>   
              <h3 class="box-title">Data Administrator</h3>
            </div> -->

            <div class="box-body">
                <div class="pull-right">
                    <a href="/administrator/dashboard_produk/create" class="btn btn-primary" ><i class ="mdi mid-plus-circle mr-2 fa fa-plus"></i> Tambah Produk</a>
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>deskripsi</th>
                  <th>harga</th>
                  <th>jenis</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1?>
                @foreach($produkList as $data)
                <tr>
                  <td style="width: 2%"><?= $i?></td>
                  <td style="width: 20%">{{$data->nama_produk}}</td>
                  <td style="width: 35%">{{Str::limit($data->deskripsi_produk, 50)}}</td>
                  <td style="width: 15%">Rp{{number_format($data->harga_produk)}}</td>
                  <td style="width: 10%"><?php if($data->kode_jenis_produk == 1){echo 'Hosting';}else if($data->kode_jenis_produk == 2){echo 'Domain';}?></td>
                  <td style="width: 10%; display:flex">
                  <span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10px;"><a href="/administrator/dashboard_produk/edit/{{$data->id_produk}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></span> | 
                  <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10px;">
                  <form action="/administrator/dashboard_produk/hapus/{{$data->id_produk}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </span> 
                </td>
                </tr>
                <?php $i++?>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  @include('administrator.layouts.bottom')