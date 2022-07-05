<?php
require_once 'class_dispenser.php';

$dispenser1 = new Dispenser();

echo '----------DISPENSER POP ICE----------';
echo '<br/>';
echo '<br/>Nama Minuman: '. $dispenser1->namaMinuman = 'Pop Ice';
echo '<br/>Harga Minuman: '. 'Rp '.  $dispenser1->harga(5000);
echo '<br/>Total Volume: '. $dispenser1->isi(1000). 'ml';
echo '<br/>Volume Segelas: '. Dispenser::volumeGelas. 'ml';
echo '<br/>Anda beli pop ice segelas, sisa volume dispenser '. $dispenser1->minum(). 'ml';


?>