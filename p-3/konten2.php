<?php
    include_once 'header.php';
?>

<!-- konten -->
<div class="container mt-5">
    <div class="row">
    <div class="col"><h2>Form Nilai Siswa</h2><hr></div>
</div>
    <div class="row justify-content-center">
    <div class="col-md-8">
        <form method="post" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
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
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-4">
                <input id="uts" name="uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
            </div>
            </div>
            
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-4">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
            </div>
            </div>

            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
            <div class="col-4">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="text" required="required" class="form-control">
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
require_once 'libfungsi.php';

//variable
$proses = $_POST['submit'];
$nama_siswa = $_POST['nama'];
$mata_kuliah =$_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];
$total = $nilai_uts + $nilai_uas + $nilai_tugas;
$nilai = $total/3;
$grade = grade($nilai);
$predikat = predikat($grade);
$hasil_ujian = kelulusan($nilai);

if(isset($_POST['submit'])):
    echo "<hr/>";
    echo "<br/>Nama : " . $nama_siswa;
    echo "<br/>Mata Kuliah : ". $mata_kuliah;
    echo "<br/>Nilai UTS : ". $nilai_uts;
    echo "<br/>Nilai UAS : ". $nilai_uas;
    echo "<br/>Nilai Tugas : ". $nilai_tugas;
    echo "<br/>Grade : ". $grade . " ". $predikat;
    echo "<br/>Keterangan : ". $hasil_ujian;
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
endif;

?>

</div>
</div>
</div>


<?php
    require_once 'footer.php';
?>