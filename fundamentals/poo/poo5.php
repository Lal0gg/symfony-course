<?php

class Padre {

    public $nombre = "Eduardo";

    public function getTextpadre() {
        return "Soy el padre";
    }
}


class Hija{
 
    public $hija;
    
    public function __construct() {
        $this->hija = new Padre();
    }

}

$hx = new Hija();
echo $hx->hija->getTextpadre() ;