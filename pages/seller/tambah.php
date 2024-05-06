<body>
  <main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
        <li class="breadcrumb-item active">Tambah Produk</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
    <div class="card">
            <div class="card-body">
              <!-- Multi Columns Form -->
              <form class="row g-3 mt-2">
                <div class="col-md-12">
                  <label class="form-label">Nama produk</label>
                  <input type="text" class="form-control" id="namaproduk" name="namaproduk" placeholder="Masukan Nama Produk">
                </div>
                <div class="col-md-6">
                  <label for="harga produk" class="form-label">Harga Produk</label>
                  <input type="number" class="form-control" id="hargaproduk">
                </div>
                <div class="col-md-6">
                  <label for="jumlahStock" class="form-label">Jumlah Stock</label>
                  <input type="number" class="form-control" id="jumlahStock" name="jumlahStock">
                </div>
                <div class="col-12">
                  <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                  <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi Produk"></textarea>
                </div>
                <div class="col-12">
                  <label for="gambar" class="form-label">Upload Gambar</label>
                  <input type="file"  class="form-control" id="gambar" accept="image/*">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
    </div>
    </section>