<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
?>

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
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .hehe {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h4 {
            color: #007bff;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="hehe">
            <h1>Terimakasih Sudah Mendaftar di IT Club Data Science</h1>
            <h4>Nama Lengkap : <?php echo $nim ?></h4>
            <h4>NIM : <?php echo $nama ?></h4>
            <h4>Jenis Kelamin : <?php echo $jenis_kelamin ?></h4>
            <h4>Prodi : <?php echo $prodi ?></h4>
            <h4>Keahlian : <?php echo $skill ?></h4>
            <h4>Domisili : <?php echo $domisili ?></h4>
            <h4>Email : <?php echo $email ?></h4>
        </div>
</div>
</body>
</html>
