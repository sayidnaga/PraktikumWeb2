<?php
    require_once "class_lingkaran.php";
    
    $lingkar1 = new Lingkaran( 10 );
  
    echo '---------LINGKARAN---------';
    echo '<br>';
    echo "<br>Nilai PHI: " . Lingkaran::PI;
    echo "<br>Jari-jari: ".' '. $lingkar1->jari.'cm';
    echo "<br>Keliling: ".$lingkar1->getKeliling().'cm';
    echo "<br>Luas: ".' '. $lingkar1->getLuas().'cm²';
?>