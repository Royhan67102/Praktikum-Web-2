<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<style>
      body {
      margin:2px;
      padding:2px;
      font-family: 'Times New Roman', Times, serif;
    }
    form {
      max-width: 600px;
      display:flex;
      flex-direction:row;
      width: 100%;
    }
    .btn btn-primary {
        background-color: rgb(53, 198, 9);
        border: rgb(53, 198, 9);
    }
    .container {
      width: 100%;
      display: flex;
      justify-content: space-between;
      margin: 0px;
    }
    .kartu{
      margin-right:0px;
      padding: 0px;
      width:25%;
      margin-left: 10px;
      margin-right:0px;
    }
    .card ul li {
        text-decoration: none;
    }
    .data {
      margin-left:0px;
      padding: 0px;
      width:100%;
    }
    </style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum02</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <h1>Form Belanja</h1>
            <div class="container">
                <form method="POST" action="praktikum02.php">
                    <div class="data">
                        <div class="form-group row">
                            <label for="customer" class="col-4 col-form-label">Customer</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div>
                                    <input id="customer" name="name" type="text" required="required" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Pilih Produk</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Kulkas">
                                    <label for="produk_0" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="TV">
                                    <label for="produk_1" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <input id="jumlah" name="jumlah" type="text" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

                    <div class="kartu">
                        <table class="tabel">
                            <p style="background-color:rgb(29, 131, 234); border-radius:5px; padding:2px;">Daftar Harga</p>
                            <p>TV : 4.200.000</p>
                            <p>KULKAS : 3.100.000</p>
                            <p>MESIN CUCI : 3.800.000</p>
                            <p style="background-color:rgb(29, 131, 234); border-radius:5px; padding:2px;">Harga Dapat Berubah Setiap Saat</p>
                        </table>
                    </div>

            </div>

            <?php
            if (isset($_POST['submit'])) {
                // Menangkap data input
                $name = $_POST['name'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                echo "<div class='hasil-input'>";
                echo "<h3>Hasil Inputan</h3>";
                echo "<br>Nama Customer : " . $name;
                echo "<br>Produk Pilihan : " . $produk;
                echo "<br>Jumlah Produk : " . $jumlah;

                switch ($produk) {
                    case "Kulkas" :
                        echo "<br>Total Belanja : " . (3100000 * $jumlah);
                        break;
                    case "TV" :
                        echo "<br>Total Belanja : " . (4200000 * $jumlah);
                        break;
                    case "Mesin Cuci" :
                        echo "<br>Total Belanja : " . (3800000 * $jumlah);
                        break;
                }

                echo "</div>";
            }
            ?>  

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>