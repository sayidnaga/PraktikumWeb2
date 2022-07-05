<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
<body>

<!-- navbar -->
<nav style="background-color: lightgrey;" class="navbar navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistem Penilaian</a>
  </div>
</nav>

<!-- konten -->
<div class="container mt-5">
    <div class="row">
    <div class="col"><h2>Form Nilai Ujian</h2><hr></div>
</div>
    <div class="row justify-content-center">
    <div class="col-md-8">
        <form method="post" action="form_nilaimahasiswa.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
            </div>
            </div>
            
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                    <option value="Basis Data I">Basis Data I</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                </select>
            </div>
            </div>

            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
            <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Masukkan Nilai" type="text" class="form-control" required="required">
            </div>
            </div>
            
            <div class="form-group row">
                <label style="color: grey;" class="col-12 col-form-label">*Klik simpan untuk melihat data siswa</label> 
            </div>
            
            <div class="form-group row">
            <div class="col">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </form>

<!-- PHP -->
<?php
    require_once 'class_nilaimahasiswa.php';

    $mahasiswa = new NilaiMahasiswa($_POST['matkul'], $_POST['nilai'], $_POST['nim']);
    $vnilai = $mahasiswa->hitungNilai();

    if(isset($_POST['submit'])):
        echo "<hr/>";
        echo "<br/>NIM : " . $mahasiswa->nim;
        echo "<br/>Mata Kuliah : ". $mahasiswa->matkul;
        echo "<br/>Nilai Ujian : ". $mahasiswa->nilai;
        echo "<br/>Hasil Ujian : ". $mahasiswa->getHasil($vnilai);
        echo "<br/>Grade : ". $mahasiswa->getGrade($vnilai);
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
    endif;
?>

</div>
</div>
</div>

<!-- footer -->
<footer style="background-color: lightgrey;" class="fixed-bottom">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a class="text-black fw-bold" href="https://api.whatsapp.com/send?phone=6281393439765&text=udah liat semuanya, kerenn 😚">Ammar Ayyasy</a></p>
    </footer>
    
</body>
</html>