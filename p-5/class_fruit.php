<?php
class Fruit{
    //variable
    public $name,
           $warna;

    //konstruk       
    public function __construct($name, $warna){
        $this->name = $name;
        $this->warna = $warna;
    }

    //method
    public function intro(){
        echo "<br/>Nama aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}

//anak class
class Strawberry extends Fruit{
    public function message(){
        echo "<br/>Aku adalah sebuah strawberry atau pisang?";
    }
}

//object
$buah = new Strawberry('Strawberry', 'Merah');
$buah->message();
$buah->intro();

?>