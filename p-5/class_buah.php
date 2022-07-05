<?php
class buah{
    //property
    public $name;
    protected $color;
    private $berat;

    //method
    public function set_color($c){
        return $this->color = $c;
    }

    public function set_berat($b){
        return $this->berat = $b;
    }
}

//object
$mangga = new buah();
echo '---------Data Belanja---------';
echo '<br/>';
echo '<br/>Nama Buah: '. $mangga->name = 'Mangga';
echo '<br/>Warna Buah: '. $mangga->set_color('hijau');
echo '<br/>Berat Total: '. $mangga->set_berat('300 kg');
?>