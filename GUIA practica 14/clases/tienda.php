<?php
class Tienda{
    public $Producto;
    public $Cargador;
    public $Protector;
    public $Descuento;
    function totalizar_compra($Cantidad){
       //$total = 0;
        if($this->Producto == "iPhone 6S"){
            return $Cantidad * 890;
        }
        else if($this->Producto == "LG G4"){
            return $Cantidad * 720;
        }
        else if($this->Producto == "Xiaomi Redmi not 9"){
            return $Cantidad * 210;
        }
        else if ($this->Producto == "Xiaomi Poco X3 NFC") {
            return $Cantidad * 360;
        }
        else if($this->Producto == "Samsung Galaxi S20"){
            return $Cantidad * 960;
        }
        else if($this->Producto == "Samsung Galaxy A51"){
            return $Cantidad *1000;
        }
        //parte del cargador
        else if ($this->Cargador == "cargador de carga rapida") {
            return $Cantidad * 20;
        }
        else if ($this->Cargador == "cargador de carga normal") {
            return $Cantidad * 15 ;
        }

        //parte del protector
        else if ($this->Protector == "protector de plastico") {
            return $Cantidad * 10;
        }
        else if ($this->Protector == "protector de silicona") {
            return $Cantidad * 15;
        }
        else if ($this->Protector == "protector de aluminio") {
            return $Cantidad * 20;
        }
        else{
            //$total = $Producto + $Protector + $cargador;
            return $Cantidad + $Producto + $cargador + $Protector+ $Descuento;
            }
        }
   }
?>