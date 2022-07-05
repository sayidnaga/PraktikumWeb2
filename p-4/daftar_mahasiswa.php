<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Daftar Nilai</title>
</head>

<body class="bg-dark">
    <div class="container bg-dark">
        <div class="row justify-content-center">
            <div class="col-10 pt-5">
    <h3 align=center class="text-light">Daftar Nilai Siswa</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr class="table-primary">
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>
    <tbody class="table-light">



    
<!-- PHP (VARIABLE) -->
<?php
    require_once "class_mahasiswa.php";

    $maha1 = new Mahasiswa('Ammar', '0110221082', 'TI', '2021', 3.95);
    $maha2 = new Mahasiswa('Zahra', '0110222731', 'TI', '2021', 3.80);
    $maha3 = new Mahasiswa('Miqdad', '0110222722', 'TI', '2021', 3.50);
    $maha4 = new Mahasiswa('Tami', '0000000001', 'TI', '2012', 2.80);


    $ar_nilai = [$maha1, $maha2 ,$maha3, $maha4];
?>



<!-- PHP (CETAK) -->
<?php
    $nomor = 1;
    foreach($ar_nilai as $maha){
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$maha->nim.'</td>';
    echo '<td>'.$maha->nama.'</td>';
    echo '<td>'.$maha->prodi.'</td>';
    echo '<td>'.$maha->angkatan.'</td>';
    echo '<td>'.$maha->ipk.'</td>';
    echo '<td>'.$maha->getPredikat().'</td>';
    echo '<tr/>';
    $nomor++;
    }
?>

    </tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</html>
