<?php
require_once 'BMIPasien.php';
class BMI{
    #variable
    public $pasien,
           $berat,
           $tinggi;

    #konstruktor
   function __construct($pasien, $berat, $tinggi){
        $this->pasien = $pasien;
        $this->berat = $berat;   
        $this->tinggi = $tinggi;   
    }

    #method
    public function getBmi(){
        $tinggi = $this->tinggi/100;
        $bmi = $this->berat / pow($tinggi, 2);
        return $bmi;
    }

    function getStatus(){
        if ($this->getBMI() < 18.5)
            return "Kekurangan berat badan";

        elseif ($this->getBMI() >= 18.5 && $this->getBMI() < 24.9)
            return "Normal (ideal)";

        elseif ($this->getBMI() >= 25.0 && $this->getBMI() < 29.9)
            return "Kelebihan berat badan";

        elseif ($this->getBMI() >= 30.0)
            return "Kegemukan (obesitas)";
    }
}
?>