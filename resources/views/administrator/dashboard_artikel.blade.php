@include('administrator/layouts/top')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Artikel
        <small>QwordsTask</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Artikel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

                <!-- <div class="alert alert-success">
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
                </div>    -->
              <h3 class="box-title">Data Artikel</h3>
            </div>

            <div class="box-body">
                <div class="pull-right">
                    <a href="/administrator/dashboard_artikel/create" class="btn btn-primary" ><i class ="mdi mid-plus-circle mr-2 fa fa-plus"></i> Tambah Artikel</a>
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Gambar</th>
                  <th>Isi</th>
                  <th>Penulis</th>
                  <th>Tanggal Upload</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1?>
                @foreach($artikelList as $data)
                <tr>
                  <td style="width: 2%"><?= $i?></td>
                  <td style="width: 15%">{{Str::limit($data->judul_artikel, 40)}}</td>
                  <td style="width: 10%"><img src="/images/{{$data->gambar_artikel}}" width="150px" style="height:100px" alt=""></td>
                  <td style="width: 25%">{{Str::limit($data->isi_artikel, 100)}}</td>
                  <td style="width: 15%">{{$data->penulis_artikel}}</td>
                  <td style="width: 15%">{{$data->created_at}}</td>
                  <td style="width: 1%; display:flex">
                  <span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10px;"><a href="/administrator/dashboard_artikel/edit/{{$data->id_artikel}}" class="btn btn-warning"><i class="fa fa-edit"></i></a></span> | 
                  <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10px;">
                  <form action="/administrator/dashboard_artikel/hapus/{{$data->id_artikel}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </span> </td>
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