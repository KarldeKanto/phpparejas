<?php

class Armas {

    public $id;
    public $name;

    function __construct($id="", $name=""){
        $this->id = $id;
        $this->name = $name;
    }

    function setId($id) {
        $this->id = $id;
    }
    function setName($name) {
        $this->name = $name;
    }

    function getId() {
        return $this->id;
    }
    function getName() {
        return $this->name;
    }

}


class Arco extends Armas {

    public $tipoMadera;

    function __construct($id, $name, $tipoMadera){
        parent::__construct($id, $name);

        $this->tipoMadera = $tipoMadera;
    }

    function setTipoMadera($tipoMadera) {
        $this->tipoMadera = $tipoMadera;
    }
    function getTipoMadera() {
        return $this->tipoMadera;
    } 
}

$obj = new Arco("123", "arco1", "pino");

var_dump($obj);