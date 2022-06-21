  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Pengadopsi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Pengadopsi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <form method="POST" action="<?= site_url('adopsi/create') ?>">
			  <div class="form-group">
			    <label for="nama_pengadopsi">Nama Pengadopsi</label>
			    <input type="text" class="form-control" name="nama_pengadopsi" placeholder="Nama">
			  </div>
			  <div class="form-group">
			    <label for="alamat">Alamat</label>
			    <input type="text" class="form-control" name="alamat" placeholder="Alamat">
			  </div>
			  <div class="form-group">
			    <label for="no_telp">No. Telp</label>
			    <input type="number" class="form-control" name="no_telp" placeholder="628xxxxxxx">
			  </div>
			  <button type="submit" class="btn btn-primary btn-block">Submit</button>
			</form>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->