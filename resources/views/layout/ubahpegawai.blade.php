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
              <form action="/updatedata4/{{$pegawai->id_pegawai}}" method="post">
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
    <label for="exampleInputPassword1">Nama Pegawai</label>
    <input type="text" name="nama" value="{{$pegawai->nama}}" class="form-control" id="exampleInputPassword1" placeholder="Nama Pegawai" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Bagian</label>
    <input type="text" name="bagian" value="{{$pegawai->bagian}}" class="form-control" id="exampleInputPassword1" placeholder="Bagian" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" name="alamat" value="{{$pegawai->alamat}}" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Hp</label>
    <input type="text" name="no_hp" value="{{$pegawai->no_hp}}" class="form-control" id="exampleInputPassword1" placeholder="No Hp" value="">
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