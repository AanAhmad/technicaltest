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
              <form role="form" action="<?= base_url; ?>/fuel/updateFuel" method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $data['fuel']['fuel_id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama Bahan Bakar</label>
                    <input type="text" class="form-control" placeholder="masukkan fuel..." name="fuel_name" value="<?= $data['fuel']['fuel_name']; ?>">
                  <div class="form-group">
                    <label >Harga Bahan Bakar(Rp/L)</label>
                    <input type="text" class="form-control" placeholder="masukkan fuel..." name="fuel_price" value="<?= $data['fuel']['fuel_price']; ?>">
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