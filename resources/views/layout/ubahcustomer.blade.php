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
              <form action="/updatedata5/{{$customer->id_customer}}" method="post">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" value="{{$customer->username}}" class="form-control" id="exampleInputPassword1" placeholder="Username" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" value="{{$customer->pass}}" class="form-control" id="exampleInputPassword1" placeholder="Password" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Admin</label>
    <input type="text" name="nama" value="{{$customer->nama}}" class="form-control" id="exampleInputPassword1" placeholder="Nama Admin" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" name="alamat" value="{{$customer->alamat}}" class="form-control" id="exampleInputPassword1" placeholder="Alamat" value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Hp</label>
    <input type="text" name="no_hp" value="{{$customer->no_hp}}" class="form-control" id="exampleInputPassword1" placeholder="No Hp" value="">
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