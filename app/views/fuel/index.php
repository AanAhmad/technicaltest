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
          <h3 class="card-title"><?= $data['title'] ?></h3> <a href="<?= base_url; ?>/fuel/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Bahan Bakar</a>
        </div>
        <div class="card-body">
          <table class="table table-striped table-index">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Id</th>
                <th>Nama Bahan Bakar</th>
                <th>Harga Bahan Bakar</th>
                <th style="width: 150px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data['fuel'] as $row) : ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $row['fuel_id']; ?></td>
                  <td><?= $row['fuel_name']; ?></td>
                  <td>Rp<?= $row['fuel_price']; ?></td>
                  <td>
                    <a href="<?= base_url; ?>/fuel/edit/<?= $row['fuel_id'] ?>" class="badge badge-info ">Edit</a> <a href="<?= base_url; ?>/fuel/hapus/<?= $row['fuel_id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
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