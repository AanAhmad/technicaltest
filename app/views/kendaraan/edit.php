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
              <form role="form" action="<?= base_url; ?>/kendaraan/updateKendaraan" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $data['kendaraan']['vehicle_id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama kendaraan</label>
                    <input type="text" class="form-control" placeholder="masukkan nama..." name="vehicle_name" value="<?= $data['kendaraan']['vehicle_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Manufaktur</label>
                    <input type="text" class="form-control" placeholder="masukkan manufaktur..." name="manufacturer" value="<?= $data['kendaraan']['manufacturer']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Tipe</label>
                    <input type="text" class="form-control" placeholder="masukkan tipe..." name="type" value="<?= $data['kendaraan']['type']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Bahan Bakar</label>
                    <select class="form-control" name="fuel_id">
                        
                         <?php foreach ($data['fuel'] as $row) :?>
                        <option value="<?= $row['fuel_id']; ?>"><?= $row['fuel_name']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Konsumsi BBM(Km/L)</label>
                    <input type="number" class="form-control" placeholder="masukkan konsumsi bbm..." name="fuel_consumption" value="<?= $data['kendaraan']['fuel_consumption']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Service Terkahir</label>
                    <input type="date" class="form-control" name="last_service" value="<?= $data['kendaraan']['last_service']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Service Selanjutnya</label>
                    <input type="date" class="form-control" name="next_service" value="<?= $data['kendaraan']['next_service']; ?>">
                  </div>
                  <div class="form-group">
                    <label >Pemilik</label>
                    <select name="owner" class="form-control">
                      <option value="Perusahaan">Perusahaan</option>
                      <option value="Rental">Rental</option>
                    </select>
                  </div>
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