<?php
    class Lingkaran { // buka class

    #variable
        public $jari;
        const PI = 3.14;
    
    #konstruktor
    function __construct( $r ){
        $this->jari = $r;
    }

    #method
    function getLuas(){
        return self::PHI * $this->jari * $this->jari ;
    }

    function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }        
    } // tutup class
    ?>