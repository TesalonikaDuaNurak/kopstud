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
              <form action="/updatedata/{{$makanan->id_makan}}" method="post">
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
    <label for="exampleInputPassword1">Nama Makanan</label>
    <input type="text" name="nama" value="{{$makanan->nama}}" class="form-control" id="exampleInputPassword1" placeholder="Nama Makanan" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Makanan</label>
    <input type="text" name="jenis_makanan" value="{{$makanan->jenis_makanan}}" class="form-control" id="exampleInputPassword1" placeholder="Jenis Makanan" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jumlah Makanan</label>
    <input type="text" name="jumlah_makanan" value="{{$makanan->jumlah_makanan}}" class="form-control" id="exampleInputPassword1" placeholder="Stok Barang" value="">
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