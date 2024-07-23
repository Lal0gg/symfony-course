<?php

class Miclase{
    // atributos con  modificador de acceso
    private $nombre;
    private $edad;
    private $correo;
    //  constructor
    public function __construct($nombre,$edad,$correo){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->correo = $correo;
    }

    //metodos

    public function getNombre(){
        return $this->nombre;  
    }
    public function getEdad(){
        return $this->edad;
    }

    public function getCorreo2(){
        return $this->correo;
    }

    public function sumita($num1,$num2){
        return $num1 + $num2;
    }

    //metodos estaticos

}
$nombre = "Eduardo Gonzalez";
$edad = 24;
$correo = "lal0g@gmail.com";


$miclase = new Miclase($nombre,$edad,$correo);

echo $miclase ->getNombre()." ".$miclase -> getEdad()." " .$miclase -> getCorreo2() ."\n";

