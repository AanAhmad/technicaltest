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
          <h3 class="card-title"><?= $data['title'] ?></h3>
          <div class="btn-group float-right"><a href="<?= base_url; ?>/order/lihatlaporan" class="btn float-right btn-xs btn btn-warning">Lihat Laporan</a></div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-index">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Id</th>
                <th>Nama Kendaraan</th>
                <th>Nama Driver</th>
                <th>Jarak Tempuh</th>
                <th>Biaya</th>
                <th>Status</th>
                <th>Catatan</th>
                <th>Persetujuan</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['order'] as $row) : ?>
                <?php
                  if ($_SESSION['id'] == $row['aprv1_id']) {
                    $aprv = "aprv1";
                } if ($_SESSION['id'] == $row['aprv2_id']) {
                    $aprv = "aprv2";
                }
                  ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $row['booking_id']; ?></td>
                  <td><?= $row['vehicle_name']; ?></td>
                  <td><?= $row['driver_name']; ?></td>
                  <td><?= $row['distance']; ?>Km</td>
                  <td>Rp<?= $row['cost']; ?></td>
                  <td><?= $row[$aprv.'_status']; ?></td>
                  <td><?= $row[$aprv.'_note']; ?></td>
                  <td>
                    <a href="<?= base_url; ?>/order/edit/<?= $row['booking_id'] ?>" class="badge badge-info "><i class="fas fa-edit"></i></a>
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