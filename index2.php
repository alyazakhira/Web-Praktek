<!DOCTYPE html>
<html>
  <head>
    <title>Form Pemesanan</title>
    <!--Framework CSS-->
    <link rel="stylesheet" href="framework/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <!--CSS custom-->
    <link rel="stylesheet" href="style/stylesheet.css">
    <!--CSS custom-->
    <script src="js/script.js"></script>
    <!--Framework Javascript-->
    <script src="framework/bootstrap-5.2.0-beta1-dist/js/bootstrap.js"></script>
  </head>

  <body>

    <!--Content-->
    <div class="container">
          <div class="container display-6" id="reserve">
            <p>Form Pemesanan</p>
          </div>
          <div class="container">
            <form action="data_processor.php" method="post" name="pemesanan">

              <!--Input_nama-Text_type-->
              <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" id="nama">
                </div>  
              </div>
              <!--Input_ID-Text_type-->
              <div class="mb-3 row">
              <label for="ID" class="col-sm-2 col-form-label">Nomor Identitas</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="ID" id="ID">
                </div>  
              </div>
              <!--Input_no_hp-Text_type-->
              <div class="mb-3 row">
              <label for="telepon" class="col-sm-2 col-form-label">No. HP</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="telepon" id="telepon">
                </div>  
              </div>
              <!--Input_destinasi-Select_type-->
              <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="tempat">Tempat Wisata</label>
                <select class="form-control" id="tempat" name="tempat" onchange="harga()">
                  <option selected>Pilih</option>
                  <option value="a">Museum</option>
                  <option value="b">Pantai</option>
                  <option value="c">Gunung</option>
                </select>
              </div>
              <!--Input_tanggal_kunjungan-Text_type-->
              <div class="mb-3 row">
              <label for="tgl_kunjung" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tgl_kunjung" id="tgl_kunjung">
                </div>  
              </div>
              <!--Input_adult-Text_type-->
              <div class="mb-3 row">
              <label for="dewasa" class="col-sm-2 col-form-label">Pengunjung Dewasa</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="dewasa" id="dewasa">
                </div>  
              </div>
              <!--Input_children-Text_type-->
              <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Pengunjung Anak-anak</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="anak" id="anak">
                </div>  
              </div>
              <!--Harga-->
              <div class="mb-3 row">
              <p class="col-sm-2 col-form-label">Harga Tiket</p>
                <div class="col-sm-10">
                  <label for="harga" id="harga" name="harga"></label>
                </div>  
              </div>
              
              <!--Total Harga-->
              <div class="mb-3 row">
              <p class="col-sm-2 col-form-label">Total Bayar</p>
                <div class="col-sm-10">
                  <label for="total_harga" id="total_harga" name="total_harga"></label>
                </div>  
              </div>

              <!--Persetujuan-->
              <div class="row">
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat
                      dan ketentuan yang telah ditetapkan
                    </label>
                  </div>
                </div>
              </div>

              <!--Button-->
              <div class="row">
                <!--Cancel-Button_type-->
                <div class="col-4 justify-content-center">
                  <div class="d-grid gap-2">
                    <input class="btn btn-dark me-md-2" type="button" value="Cancel" target="_blank" href="index.php"/>
                  </div>
                </div>
                <!--Submit-Button_type-->
                <div class="col-4 justify-content-center">
                  <div class="d-grid gap-2">
                    <input class="btn btn-dark" type="submit" value="Pesan Tiket"/>
                  </div>
                </div>
                <!--Hitung-Button_type-->
                <div class="col-4 justify-content-center">
                  <div class="d-grid gap-2">
                    <input class="btn btn-dark" type="button" value="Hitung Harga" onclick="hitung()"/>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!--End of add-->

        </div>    
      </div>
    </div>
    <!--End of content-->
  </body>
</html>