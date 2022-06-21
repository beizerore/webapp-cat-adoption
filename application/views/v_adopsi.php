  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pengadopsi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengadopsi</li>
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
              <br><br>
              <table id="tabel-show" class="table table-bordered table-dark rounded cell-border row-border" style="border-collapse: collapse; border-radius: 1em; overflow: hidden;">
                <thead>
                  <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Nama Pengadopsi</center></th>
                    <th scope="col"><center>ID Pengadopsi</center></th>
                    <th scope="col"><center>Alamat</center></th>
                    <th scope="col"><center>No. Telp</center></th>
                    <th scope="col"><center>Action</center></th>
                  </tr>
                </thead>
                <tbody> 
                  <?php $no=1; 
                  foreach ($adopsi as $item) { ?>
                    <tr class="bg-dark" style="border: 2px solid black;">
                      <td style="border: 2px solid black;"><center><?= $no++ ?></center></td>
                      <td style="border: 2px solid black;"><center><?= $item['nama_pengadopsi'] ?></center></td>
                      <td style="border: 2px solid black;"><center><?= $item['id_adopsi'] ?></center></td>
                      <td style="border: 2px solid black;"><center><?= $item['alamat'] ?></center></td>
                      <td style="border: 2px solid black;"><center><?= $item['no_telp'] ?></center></td>
                      <td style="border: 2px solid black;"><center>
                        <a href="<?= site_url('adopsi/update/'.$item['id_adopsi']) ?>" style="width: 90px; height: 35px;" class="btn btn-primary">Update</a>
                        <a href="<?= site_url('adopsi/delete/'.$item['id_adopsi']) ?>" style="width: 90px; height: 35px;" class="btn btn-primary">Delete</a></center>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->