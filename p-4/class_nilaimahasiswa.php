<?php

class NilaiMahasiswa{
    #variable
    public $matkul,
           $nilai,
           $nim;

    #konstruktor
    function __construct($matkul, $nilai, $nim){
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    #fungsi ambil variable
    function hitungNilai(){
        return $this->nilai;
    }

    #method
    function getGrade($vnilai){
        if ($vnilai >= 85){
            return 'A';
        }elseif($vnilai >= 70){
           return 'B';
        }elseif($vnilai >= 56){
            return 'C';
        }elseif($vnilai >= 36){
            return 'D';
        }elseif ($vnilai >= 10){
            return 'E';
        }else{
            return '(tidak ada nilai)';
        }
    }

    function getHasil($vnilai){
        if ($vnilai >= 55 ){
            return 'LULUS';
        }else {
            return 'TIDAK LULUS';
        }
    }
}
?>