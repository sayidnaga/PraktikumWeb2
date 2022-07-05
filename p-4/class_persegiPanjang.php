<?php
    class PersegiPanjang{ // buka class

        #variable
        public $panjang,
               $lebar;
            
        #konstruktor
        function __construct( $panjang, $lebar){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
    
        #method
        function getKeliling(){
            return 2 * ($this->panjang + $this->lebar)  ;
        }
    
        function getLuas(){
            return $this->panjang * $this->lebar;
        }
    
    } // tutup class
        
?>