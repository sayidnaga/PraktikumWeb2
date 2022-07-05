<?php
#parent class
class Account{
    #variable
    public $nomor,
           $nama,
           $saldo;
          
    #konstruktor
    function __construct($nomor, $nama, $saldo){
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }

    #method
    function tabung($tabung){
        return $this->saldo + $tabung;
    }

    function tarik($tarik){
        return $this->saldo - $tarik;
    }
}

#anak class
class accountBank extends Account{
    public function ahmad(){
        echo "Ahmad nabung Rp 1.000.000";
    }

    public function budi(){
        echo "Budi tarik uang Rp 2.500.000";
    }

}

?>