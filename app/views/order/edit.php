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
      <div class="card card-primary">
      <div class="card-header">
          <h3 class="card-title">Detail Pesanan</h3>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nama Kendaraan</th>
                <th>Nama Driver</th>
                <th>Jarak Tempuh</th>
                <th>Biaya</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td><?= $data['order']['booking_id']; ?></td>
                  <td><?= $data['order']['vehicle_name']; ?></td>
                  <td><?= $data['order']['driver_name']; ?></td>
                  <td><?= $data['order']['distance']; ?>Km</td>
                  <td>Rp<?= $data['order']['cost']; ?></td>
                </tr>
            </tbody>
          </table>
          <div class="card-header">
          <h3 class="card-title"><?= $data['title']; ?></h3>
        </div>
        <form role="form" action="<?= base_url; ?>/order/updateOrder" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="booking_id" value="<?= $data['order']['booking_id']; ?>">
          <input type="hidden" name="aprv1_id" value="<?= $data['order']['aprv1_id']; ?>">
          <input type="hidden" name="aprv2_id" value="<?= $data['order']['aprv2_id']; ?>">
          <div class="card-body">
            <div class="form-group">
              <label for="note">Catatan</label>
              <textarea class="form-control" id="note" name="note" rows="3"></textarea>
            </div>
            <div class="form-group">
              <span id="setuju"></span>
              <span id="ditolak"></span>
            </div>
          </div>
        </form>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->