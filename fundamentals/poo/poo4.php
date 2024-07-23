<?php

class Padre {

    public $nombre = "Eduardo";

    public function getTextpadre() {
        return "Soy el padre";
    }
}


class Hija extends Padre {

    public function miMetodo() {
        return $this->nombre;
    }

    

}


$hija = new Hija();
echo $hija->miMetodo    ();