  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $data['title'] ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <?php
            Flasher::Message();
          ?>
        </div>
      </div>
      <!-- Default box -->

      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title'] ?></h3> <a href="<?= base_url; ?>/kendaraan/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Kendaraan</a>
        </div>
        <div class="card-body">
          <form action="<?= base_url; ?>/kendaraan/cari" method="post">
            <div class="row mb-3">
              <div class="col-lg-6">
              </div>
            </div>
          </form>
          <table class="table table-striped table-index">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Id</th>
                <th>Nama Kendaraan</th>
                <th>Manufaktur</th>
                <th>Tipe</th>
                <th>Bahan Bakar</th>
                <th>Konsumsi BBM(Km/L)</th>
                <th>Service Terakhir</th>
                <th>Service Selanjutnya</th>
                <th>Pemilik</th>
                <th style="width: 150px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['kendaraan'] as $row):?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $row['vehicle_id']; ?></td>
                  <td><?= $row['vehicle_name']; ?></td>
                  <td><?= $row['manufacturer']; ?></td>
                  <td><?= $row['type']; ?></td>
                  <td><?= $row['fuel_name']; ?></td>
                  <td><?= $row['fuel_consumption']; ?>Km</td>
                  <td><?= $row['last_service']; ?></td>
                  <td><?= $row['next_service']; ?></td>
                  <td><?= $row['owner']; ?></td>
                  <td>
                    <a href="<?= base_url; ?>/kendaraan/edit/<?= $row['vehicle_id'] ?>" class="badge badge-info ">Edit</a> <a href="<?= base_url; ?>/kendaraan/hapus/<?= $row['vehicle_id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                  </td>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->