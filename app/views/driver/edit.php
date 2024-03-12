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
          <h3 class="card-title"><?= $data['title']; ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url; ?>/driver/updateDriver" method="POST" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?= $data['driver']['driver_id']; ?>">
          <div class="card-body">
            <div class="form-group">
              <label>Nama Driver</label>
              <input type="text" class="form-control" placeholder="masukkan driver..." name="driver_name" value="<?= $data['driver']['driver_name']; ?>">
            </div>
            <div class="form-group">
              <label>No Telepon</label>
              <input type="text" class="form-control" placeholder="masukkan nomor..." name="phone" value="<?= $data['driver']['phone']; ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="masukkan email..." name="email" value="<?= $data['driver']['email']; ?>">
            </div>
            <div class="form-group">
              <label>No SIM</label>
              <input type="number" class="form-control" placeholder="masukkan sim..." name="license_number" value="<?= $data['driver']['license_number']; ?>">
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
  <!-- /.content-wrapper -->