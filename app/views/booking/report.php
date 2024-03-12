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
          </div>
        <div class="card-body" style="height : 68vh;">
          <table id="report" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Id</th>
                <th>Nama Kendaraan</th>
                <th>Nama Driver</th>
                <th>Jarak Tempuh</th>
                <th>Biaya</th>
                <th>Penyetuju 1</th>
                <th>Penyetuju 2</th>
                <th>Penyetuju 1 Status</th>
                <th>Penyetuju 2 Status</th>
                <th>Penyetuju 1 Catatan</th>
                <th>Penyetuju 2 Catatan</th>
                <th>Status</th>
                <th>Pesanan DIbuat</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['booking'] as $row) : ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $row['booking_id']; ?></td>
                  <td><?= $row['vehicle_name']; ?></td>
                  <td><?= $row['driver_name']; ?></td>
                  <td><?= $row['distance']; ?> Km</td>
                  <td>Rp<?= $row['cost']; ?></td>
                  <td><?= $row['aprv1_name']; ?></td>
                  <td><?= $row['aprv2_name']; ?></td>
                  <td><?= $row['aprv1_status']; ?></td>
                  <td><?= $row['aprv2_status']; ?></td>
                  <td><?= $row['aprv1_note']; ?></td>
                  <td><?= $row['aprv2_note']; ?></td>
                  <td><?= $row['status']; ?></td>
                  <td><?= $row['booking_created']; ?></td>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <script>
    new DataTable('#report', {
    layout: {
      topStart: {
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
      }
    }
  });
  </script>