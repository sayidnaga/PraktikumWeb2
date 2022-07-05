<?php

class Mahasiswa{
    #variable
    public $nama,
           $nim,
           $prodi,
           $angkatan,
           $ipk;

    #konstruktor
    function __construct($nama, $nim, $prodi, $angkatan, $ipk){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->angkatan = $angkatan;
        $this->ipk = $ipk;
    }

    #method
    function getPredikat(){
        if ($this->ipk < 2.0)
            return "Cukup";

        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
            return "Baik";

        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
            return "Memuaskan";

        elseif ($this->ipk >= 3.75 && $this->ipk <=4.0)
            return "Cum Laude";
    }

}

?>