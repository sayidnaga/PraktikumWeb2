<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bank | Ammar Berkah</title>
</head>

<body class="bg-dark">
<h3 align=center class="text-light pt-5">Bank Ammar Berkah</h3>
    <div class="container bg-dark">
        <div class="row justify-content-center">
            <div class="col-8 pt-3">
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr class="table-primary text-center">
                            <th>No</th>
                            <th>Rekening</th>
                            <th>Nama Nasabah</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">



    
<!-- PHP (VARIABLE) -->
<?php
    require_once "class_bank.php";

    $sabah1 = new accountBank('C001', 'Ahmad', 6000000);
    $sabah2 = new accountBank('C002', 'Budi', 5350000);
    $sabah3 = new accountBank('C003', 'Kurniawan', 2500000);

    $ar_bank = [$sabah1, $sabah2 ,$sabah3];
?>



<!-- PHP (CETAK) -->
<?php 
    $nomor = 1;
    foreach($ar_bank as $sabah){
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$sabah->nomor.'</td>';
    echo '<td>'.$sabah->nama.'</td>';
    echo '<td>'.'Rp '.number_format($sabah->saldo).'</td>';
    echo '<tr/>';
    $nomor++;
    }
?>

    </tbody>
    </table>
    </div>
    <div class="col-3 pt-3">
        <div class="card" style="width: 19rem;">
            <div style="background-color: #b8daff;" class="card-header text-dark">
               <b>Aktivitas</b>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $sabah->ahmad();?></li>
                <li class="list-group-item"><?php echo $sabah->budi();?></li>
            </ul>
            <div  style="background-color: #b8daff;" class="card-header text-dark">
               <b>Sisa Saldo</b> 
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Ahmad: <?php echo 'Rp '. number_format($sabah1->tabung(1000000));?></li>
                <li class="list-group-item">Budi: <?php echo 'Rp '. number_format($sabah2->tarik(2500000));?> </li>
            </ul>
    </div>
    </div>
</body>
</html>
