  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Riwayat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Riwayat</li>
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
            <form method="POST" action="<?= site_url('riwayat/create') ?>">
        <div class="form-group">
          <label for="id_adopsi">Nama Pengadopsi</label>
          <select name="id_adopsi" class="custom-select">
            <?php foreach ($adopsi as $ado) { ?>
              <option value="<?= $ado['id_adopsi'] ?>"><?= $ado['nama_pengadopsi']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="id_kucing">Nama Kucing</label>
          <select name="id_kucing" class="custom-select">
            <?php foreach ($keluarga as $kel) { ?>
              <option value="<?= $kel['id_kucing'] ?>"><?= $kel['nama_kucing']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="tanggal_adopsi">Tanggal Adopsi</label>
          <input type="date" class="form-control" name="tanggal_adopsi">
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