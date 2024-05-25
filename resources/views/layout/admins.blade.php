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
        href="tambahadmin" class="btn btn-primary">Add Data</a>
        <a target="_blank"
        href="eksporadmin" class="btn btn-primary"><i class="bi bi-printer">Cetak Data</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Nama Admin </th>
                      <th>Alamat</th>
                      <th>No Hp </th>
                      <th>Password </th>
                      <th>Aksi </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($admin as $makan)
                    <tr>
                      <td>{{$makan->username}}</td>
                      <td>{{$makan->nama}}</td>
                      <td>{{$makan->alamat}}</td>
                      <td>{{$makan->no_hp}}</td>
                      <td>{{$makan->pass}}</td>
                      <td>
                      <a type="button" class="btn btn-warning" href="/ubahadmin/{{$makan->id_admin}}">Edit</a>
                            <a type="button" class="btn btn-danger" href="/deleteadmin/{{$makan->id_admin}}">Delete</a>

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