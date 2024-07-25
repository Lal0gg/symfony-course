<?php

abstract class Conectar{
    
    private $con;
    public function conectar(){
        try{

            $this->con = new PDO("mysql:dbname=ejemplo3;host=localhost;port=3306","root","");

        }catch(PDOException $e){
            die("error: " . $e);
        }
        return $this->con;
    }

    public function setNames(){
        return $this->con->query("SET NAMES 'utf8'");
    } 
}



class Datos extends Conectar
{
    private $bd;

    public function __construct()
    {
        $this->bd = parent::conectar();
        self::setNames();
    }
    public function getDatos($sql)
    {
        $datos = $this->bd->prepare($sql);
        $datos->execute();
        return $datos->fetchAll();
        $this->bd=null;
    }
    public function getDato($sql)
    {
        $datos = $this->bd->prepare($sql);
        $datos->execute();
        return $datos->fetch();
        $this->bd=null;
    }
    public function setDatos($sql)
    {
        $datos = $this->bd->prepare($sql);
        $datos->execute();
        //return $this->bd->lastInsertId();
    }
}