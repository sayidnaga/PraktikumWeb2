<?php
class Dispenser{
    //property
    protected $volume,
              $hargaSegelas;
    const volumeGelas = 250;
    public $namaMinuman;

    //method
    public function isi($vol){
        return $this->volume = $vol;
    }
    public function harga($hrg){
        return $this->hargaSegelas = $hrg;
    }

    function minum(){
        return $this->volume - self::volumeGelas;
    }
}

?>