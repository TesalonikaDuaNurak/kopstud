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
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <form action="/insertdata2" method="post" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Admin</label>
   <select name="id_admin" id="">
    @foreach ($admin as $d)
    <option value="{{$d->id_admin}}">{{$d->nama}}</option>
    @endforeach
   </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ID Minuman</label>
    <input type="text" name="id_minuman" class="form-control" id="exampleInputPassword1" placeholder="ID Minuman">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Minuman</label>
    <input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama Minuman">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Minuman</label>
    <input type="text" name="jenis_minuman" class="form-control" id="exampleInputPassword1" placeholder="Jenis Minuman">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Minuman</label>
    <input type="text" name="jumlah_minuman" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Minuman">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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