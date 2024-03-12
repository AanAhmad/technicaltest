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
          <h3 class="card-title"><?= $data['title'] ?></h3> <a href="<?= base_url; ?>/driver/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Driver</a>
        </div>
        <div class="card-body">
          <table class="table table-striped table-index">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Id</th>
                <th>Nama Driver</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No SIM</th>
                <th style="width: 150px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['driver'] as $row) : ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $row['driver_id']; ?></td>
                  <td><?= $row['driver_name']; ?></td>
                  <td><?= $row['phone']; ?></td>
                  <td><?= $row['email']; ?></td>
                  <td><?= $row['license_number']; ?></td>
                  <td>
                    <a href="<?= base_url; ?>/driver/edit/<?= $row['driver_id'] ?>" class="badge badge-info ">Edit</a> <a href="<?= base_url; ?>/driver/hapus/<?= $row['driver_id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                  </td>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->