  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Kucing</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Kucing</li>
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
            <form method="POST" action="<?= base_url('home/create') ?>">
			  <div class="form-group">
			    <label for="nama_kucing">Nama Kucing</label>
			    <input type="text" class="form-control" name="nama_kucing" placeholder="Nama">
			  </div>
			  <div class="form-group">
			    <label for="jenis">Jenis</label>
			    <input type="text" class="form-control" name="jenis" placeholder="Jenis">
			  </div>
			  <div class="form-group">
			    <label for="jenis">Umur</label>
			    <input type="number" class="form-control" name="umur" placeholder="00">
			  </div>
			  <div class="form-group">
			    <label for="jenis">Biaya</label>
			    <input type="number" class="form-control" name="biaya" placeholder="Biaya">
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