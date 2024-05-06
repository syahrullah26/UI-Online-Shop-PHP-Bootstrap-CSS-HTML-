<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Pesanan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="card">
            <div class="card-body mt-3">
              <!-- Default Tabs -->
              <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Masuk</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Dikirim</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Selesai</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabjustifiedContent">
                <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                <?php 
                for($i=1;$i<=10;$i++){?>
                  <tr>
                    <th scope="row"><?php echo $i ;?></th>
                    <td>Korek Api</td>
                    <td>1</td>
                    <td>10.000</td>
                    <td>10.000</td>
                    <td ><button class="btn btn-primary"><i class="bi bi-cart-check-fill"></i></button>
                        <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->
                </div>
                <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status</th>

                  </tr>
                </thead>
                <tbody>
                <?php 
                for($i=1;$i<=10;$i++){?>
                  <tr>
                    <th scope="row"><?php echo $i ;?></th>
                    <td>Korek Api</td>
                    <td>1</td>
                    <td>10.000</td>
                    <td>10.000</td>
                    <td > Dikirim</td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->                  
                </div>
                <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status</th>

                  </tr>
                </thead>
                <tbody>
                <?php 
                for($i=1;$i<=10;$i++){?>
                  <tr>
                    <th scope="row"><?php echo $i ;?></th>
                    <td>Korek Api</td>
                    <td>1</td>
                    <td>10.000</td>
                    <td>10.000</td>
                    <td >Selesai</td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
              <!-- End Table with hoverable rows -->
                </div>
              </div><!-- End Default Tabs -->
              </section>

</main><!-- End #main -->
</body>