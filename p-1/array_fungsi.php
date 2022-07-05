<!DOCTYPE html>
    <html>
    <body bgcolor=beige>

    <?php

    //variable data buah
    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
    echo '<h5>Data Buah</h5>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }

    //fungsi sort
    echo '</ol>';
    sort($ar_buah);
    echo '<hr/>';
    echo '<h5>Fungsi sort adalah mengurutkan data sesuai abjad / nilai yang paling kecil</h5>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }

    //fungsi pop
    echo '</ol>';
    array_pop($ar_buah);
    echo '<hr/>';
    echo '<h5>Fungsi array_pop adalah menghapus data terakhir</h5>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }

    //fungsi push
    echo '</ol>';
    array_push($ar_buah,"kiwi");
    echo '<hr/>';
    echo '<h5>Fungsi array_push adalah menambahkan data</h5>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }

    //fungsi shift
    echo '</ol>';
    array_shift($ar_buah);
    echo '<hr/>';
    echo '<h5>Fungsi array_shift adalah menghapus data array pertama</h5>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    
    
    ?>
    </body>
    </html>