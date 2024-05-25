@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a target="_blank"
        href="tambahminuman" class="btn btn-primary">Add Data</a>
        <a target="_blank"
        href="eksporminuman" class="btn btn-primary"><i class="bi bi-printer">Cetak Data</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Jumlah Minuman </th>
                      <th>Jenis Minuman </th>
                      <th>Aksi </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($minuman as $makan)
                    <tr>
                      <td>{{$makan->Admin->username}}</td>
                      <td>{{$makan->jumlah_minuman}}</td>
                      <td>{{$makan->jenis_minuman}}</td>
                      <td>
                      <a type="button" class="btn btn-warning" href="/ubahminuman/{{$makan->id_minuman}}">Edit</a>
                            <a type="button" class="btn btn-danger" href="/deleteminuman/{{$makan->id_minuman}}">Delete</a>

                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layout.footer')