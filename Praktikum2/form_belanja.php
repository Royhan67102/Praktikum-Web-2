<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/custom-styles.css">
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
    <title>Document</title>
</head>
<body>
<h2>Form Produk Barang</h2>
<div class="container">
    <form method="POST">
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
    <div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
    <li style="background-color:#007bff;">Daftar Harga</li>
    <li class="list-group-item">TV          : 4.200.000</li>
    <li class="list-group-item">Kulkas      : 3.100.000</li>
    <li class="list-group-item">Mesin Cuci  : 3.800.000</li>
    <li style="background-color:#007bff;"> Harga dapat berubah setiap saat</li>
    </ul>
    </div>
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

</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/custom-styles.css">
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
    <title>Document</title>
</head>
<body>
<h2>Form Produk Barang</h2>
<div class="container">
    <form method="POST">
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
    <div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
    <li style="background-color:#007bff;">Daftar Harga</li>
    <li class="list-group-item">TV          : 4.200.000</li>
    <li class="list-group-item">Kulkas      : 3.100.000</li>
    <li class="list-group-item">Mesin Cuci  : 3.800.000</li>
    <li style="background-color:#007bff;"> Harga dapat berubah setiap saat</li>
    </ul>
    </div>
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

</body>
>>>>>>> 9c1fd4b (Tugas Praktikum 2)
</html>