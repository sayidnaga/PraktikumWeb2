<?php
require_once 'Pasien.php';
class BMIPasien extends Pasien{
    #variable
    public $bmi,
           $tanggal,
           $pasien;


    #konstruktor
    function __construct($tanggal){
        $this->tanggal = $tanggal;   
    }
}
?>