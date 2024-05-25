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
              <form action="/updatedata2/{{$minuman->id_minuman}}" method="post">
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
    <label for="exampleInputPassword1">Nama Minuman</label>
    <input type="text" name="nama" value="{{$minuman->nama}}" class="form-control" id="exampleInputPassword1" placeholder="Nama Minuman" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Minuman</label>
    <input type="text" name="jenis_minuman" value="{{$minuman->jenis_minuman}}" class="form-control" id="exampleInputPassword1" placeholder="Jenis Minuman" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Minuman</label>
    <input type="text" name="jumlah_minuman" value="{{$minuman->jumlah_minuman}}" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Minuman" value="">
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