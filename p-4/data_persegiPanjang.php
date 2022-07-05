<?php

require_once "class_persegiPanjang.php";

$perpan1 = new PersegiPanjang(10, 7);
echo '---------PERSEGI PANJANG---------';
echo '<br>';
echo "<br>Panjang: ".' '. $perpan1->panjang.'cm';
echo "<br>Lebar: ".' '. $perpan1->lebar.'cm';
echo "<br>Keliling: ".$perpan1->getKeliling().'cm';
echo "<br>Luas: ".' '. $perpan1->getLuas().'cm²';
?>
