<?php
require_once 'object_BMI.php';
require_once 'BMIPasien.php';
require_once 'BMI.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BMI</title>
</head>

<body style="background-color: beige;">
<h3 class="text-center mt-5"><u>Menghitung Body Mass Index (BMI)</u></h3>

    <div class="container mt-5">
    <div class="row justify-content-center">
<div class="col-8">
    <form method="post" action="form_BMI.php">
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Periksa</label> 
    <div class="col-4">
      <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="kode" name="kode" placeholder="Masukkan kode" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukkan nama" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-5">
      <select id="gender" name="gender" required="required" class="custom-select">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan (Kg)</label> 
    <div class="col-5">
      <input id="berat" name="berat" placeholder="Masukkan berat anda" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-5">
      <input id="tinggi" name="tinggi" placeholder="Masukkan Tinggi anda" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
                <label style="color: grey;" class="col-12 col-form-label">*Isi dan klik simpan untuk melihat data pasien yang anda input</label> 
            </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</div>

<hr>
<h3 class="text-center mt-5"><u>Data Pasien</u></h3>
        <div class="row justify-content-center mt-3">
<div class="col">
            <table style="background-color: white;" class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Periksa</th>
                        <th>Kode Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Gender</th>
                        <th>Berat (kg)</th>
                        <th>Tinggi (cm)</th>
                        <th>Nilai BMI</th>
                        <th>Status BMI</th>
                    </tr>
                </thead>
            <tbody>
                
<?php
    $nomor=1;
    foreach($ar_data as $obj){
?>
    <tr>
        <td><?=$nomor?></td>
        <td><?=$obj->pasien->tanggal?></td>
        <td><?=$obj->pasien->kode?></td>
        <td><?=$obj->pasien->nama?></td>
        <td><?=$obj->pasien->gender?></td>
        <td><?=$obj->berat?></td>
        <td><?=$obj->tinggi?></td>
        <td><?=round($obj->getBmi(), 2)?></td>
        <td><?=$obj->getStatus()?></td>
    </tr>
<?php
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
