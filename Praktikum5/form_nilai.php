<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body {
            background-image: none; /* Warna latar belakang */
            background-size: cover; /* Mengubah ukuran gambar agar memenuhi seluruh body */
            background-repeat: no-repeat; /* Mencegah pengulangan gambar */
            position: relative; /* Atur posisi relatif untuk footer */
            padding-bottom: 60px; /* Atur padding bottom untuk mengakomodasi tinggi footer */
        }
        
        .form-container {
            max-width: 600px; /* Atur lebar maksimum formulir agar tidak terlalu lebar */
            margin: auto; /* Tengahkan formulir di tengah halaman */
            background-color: #ffffff; /* Warna latar belakang formulir */
            padding: 20px; /* Berikan ruang di sekitar elemen formulir */
            border-radius: 10px; /* Buat sudut formulir sedikit melengkung */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Berikan efek bayangan ke formulir */
        }
        .form-container {
            max-width: 600px; /* Atur lebar maksimum formulir agar tidak terlalu lebar */
            margin: auto; /* Tengahkan formulir di tengah halaman */
        }

        /* Tambahkan ruang antara item navbar */
        .navbar-nav .nav-item {
            margin-right: 10px; /* Atur jarak antara setiap item navbar */
        }

        /* Pindahkan menu pencarian ke ujung kanan navbar */
        .navbar-collapse form {
            margin-left: auto; /* Pindahkan form ke sebelah kanan */
        } 

        footer {
            text-align: center; /* Posisi teks di tengah */
            margin-top: 10px; /* Jarak atas footer dari konten di bawahnya */
            padding: 10px 0; /* Ruang dalam footer */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEB02</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Review PHP
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PHP5 OOP
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Submit</button>
      </form>
    </div>
  </div>
</nav>

<h2>Form Nilai Ujian</h2>
<form class="form-container" method="POST" action="form_nilai.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-id-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pilih" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="pilih" name="pilih" class="custom-select" required="required">
        <option value="matkul">Pilih Mata Kuliah</option>
        <option value="UI/UX">UI/UX</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Pemrograman Web2">Pemrograman Web2</option>
        <option value="Statistika">Statistika</option>
        <option value="Jarkom">Jarkom</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calculator"></i>
          </div>
        </div> 
        <input id="nilai" name="nilai" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <hr>
  <?php
// Handling form submission and displaying result
if (isset($_POST["submit"])){
    require_once "class.php";

    $nim = $_POST["nim"];
    $pilih = $_POST["pilih"];
    $nilai = $_POST["nilai"];

    $nilaiUjian = new formnilai($nim, $pilih, $nilai);
    $result = $nilaiUjian->statusNilai();

    echo "<h2>Hasil Nilai Mahasiswa</h2>";
    echo "<p>NIM: " . $nim . "</p>";
    echo "<p>MATKUL: " . $pilih . "</p>";
    echo "<p>Nilai: " . $nilai . "</p>";
    echo "<p>Grade: " . $result['grade'] . "</p>";
    echo "<p>Keterangan: " . $result['keterangan'] . "</p>";
}
?>
</form>

<footer>
    <h4>Lab Pemrograman Web Lanjutan</h4>
    <p>DOSEN Sirojul Munir S.SI, M.Kom</p>
    <p>STT-NF - Kampus B
</footer>

</body>
</html>