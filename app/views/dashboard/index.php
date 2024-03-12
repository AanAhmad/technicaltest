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
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $data['BookingCount'] ?></h3>
                <p>Pesanan Baru</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $data['VehicleCount'] ?></h3>
                <p>Kendaraan</p>
              </div>
              <div class="icon">
                <i class="ion ion-model-s"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $data['DriverCount'] ?></h3>
                <p>Driver</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success  ">
              <div class="inner">
                <h3><?= $data['ApprovedCount'] ?></h3>
                <p>Pesanan Disetujui</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark-round"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="card-header border-0">
              <h3 class="card-title">Harga BBM</h3>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                <p class="text-success text-xl">
                  <img src="<?= base_url ?>/dist/img/pertalite.png" alt="pertalite" style="width: 100px;">
                </p>
                <p class="d-flex flex-column text-right">
                  <span class="font-weight-bold">
                    <?= $data['fuel'][0]['fuel_price'] ?>
                  </span>
                  <span class="text-muted text-uppercase"><?= $data['fuel'][0]['fuel_name'] ?></span>
                </p>
              </div>
              <!-- /.d-flex -->
              <div class="d-flex justify-content-between align-items-center mb-0">
                <p class="text-danger text-xl">
                  <img src="<?= base_url ?>/dist/img/pertamax.png" alt="pertamax" style="width: 100px;">
                </p>
                <p class="d-flex flex-column text-right">
                  <span class="font-weight-bold">
                    <?= $data['fuel'][2]['fuel_price'] ?>
                  </span>
                  <span class="text-muted text-uppercase"><?= $data['fuel'][2]['fuel_name'] ?></span>
                </p>
              </div>
              <!-- /.d-flex -->
              <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                <p class="text-warning text-xl">
                  <img src="<?= base_url ?>/dist/img/dex.png" alt="dex" style="width: 100px;">
                </p>
                <p class="d-flex flex-column text-right">
                  <span class="font-weight-bold">
                    <?= $data['fuel'][1]['fuel_price'] ?>
                  </span>
                  <span class="text-muted text-uppercase"><?= $data['fuel'][1]['fuel_name'] ?></span>
                </p>
              </div>
              <!-- /.d-flex -->
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <canvas id="myChart"></canvas>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  // Mendapatkan data kendaraan dari model
  $data['kendaraan'] = $this->model('DashboardModel')->getAllKendaraan();

  $labels = [];
  $dataValues = [];

  foreach ($data['kendaraan'] as $kendaraan) {
    $labels[] = $kendaraan['vehicle_name'];
    $dataValues[] = $kendaraan['fuel_consumption'];
  }
  ?>
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
          label: 'Fuel Cnsumption Km/1L',
          data: <?php echo json_encode($dataValues); ?>,
          borderWidth: 0.6
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>