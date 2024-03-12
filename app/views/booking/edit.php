<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $data['title']; ?></h1>
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
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><?= $data['title']; ?></h3>
      </div>
      <!-- form start -->
      <form role="form" action="<?= base_url; ?>/booking/updateBooking" method="POST" enctype="multipart/form-data">
        <div class="card-body">
          <input type="hidden" name="booking_id" value="<?= $data['booking']['booking_id']; ?>">
          <div class="form-group">
            <label>Nama Kendaraan</label>
            <select class="form-control" name="vehicle_id">
              <?php foreach ($data['vehicles'] as $row) : ?>
                <option value="<?= $row['vehicle_id']; ?>"><?= $row['vehicle_name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Nama Driver</label>
            <select class="form-control" name="driver_id">
              <?php foreach ($data['driver'] as $row) : ?>
                <option value="<?= $row['driver_id']; ?>"><?= $row['driver_name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Jarak Tempuh</label>
            <input type="number" class="form-control" name="distance" value="<?= $data['booking']['distance'] ?>" required>
          </div>
          <div class="form-group">
            <label>Biaya</label>
            <input type="number" class="form-control" name="cost" value="<?= $data['booking']['cost'] ?>" required>
          </div>
          <div class="form-group">
            <label>Penyetuju 1</label>
            <select class="form-control" name="aprv1_id">
              <?php foreach ($data['users'] as $row) : ?>
                <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label>Penyetuju 2</label>
            <select class="form-control" name="aprv2_id">
              <?php foreach ($data['users'] as $row) : ?>
                <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>


  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->s