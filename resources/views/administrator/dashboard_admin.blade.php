@include('administrator/layouts/top')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Administrator
        <small>QwordsTask</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Administrator</li>
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
                    <a href="" class="btn btn-success" target="_Blank"><i class ="mdi mid-plus-circle mr-2 fa fa-print"></i> Cetak Laporan</a>
                    <a href="" class="btn btn-primary" ><i class ="mdi mid-plus-circle mr-2 fa fa-plus"></i> Tambah Administrator</a>
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Photo</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Hak Akses</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
           
                <tr>
                  <td style="width: 2%">1</td>
                  <td style="width: 10%"><img src="/admin/dist/img/user2-160x160.jpg" width="100px" alt=""></td>
                  <td style="width: 15%">Ichsan Budiman</td>
                  <td style="width: 15%">ichsanbudiman12</td>
                  <td style="width: 10%">Super Admin</td>
                  <td style="width: 5%">Aktif</td>
                  <td style="width: 15%"><span data-toggle="tooltip" data-original-title="Edit Data" style="font-size:10px;"><a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a></span> | <span data-toggle="tooltip" data-original-title="Hapus Data" style="font-size:10px;"><a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a></span> | <span data-toggle="tooltip" data-original-title="Detail Data" style="font-size:10px;"><a href="" class="btn btn-success"><i class="fa fa-circle-info"></i></a></span></td>
                </tr>
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