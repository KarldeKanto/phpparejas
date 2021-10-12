<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
class Persona {

    public $id;
    public $name;
    public $dni;
    public $height;
    public $weight;
    public $imagen ;
    public $icon;
    public $descript;


    function __construct($id, $name,$dni, $height,$weight,$imagen,$icon,$descript){
    $this ->id= $id;
    $this ->name= $name;
    $this ->dni= $dni;
    $this ->height= $height;
    $this ->weight= $weight;
    $this ->imagen= $imagen ;
    $this ->icon= $icon;
    $this ->descript= $descript;
    }

}


class Orco extends Persona {

    public $teeth;
    public $Especie;


    function __construct($id, $name,$dni, $height,$weight,$imagen,$icon,$descript,$teeth,$species){
        parent::__construct($id, $name,$dni, $height,$weight,$imagen,$icon,$descript);

        $this->teeth = $teeth;
        $this->species = $species;
    }

   
    } 
    class humano extends Persona {

        public $culture;
        public $idiom;
    
    
        function __construct($id, $name,$dni, $height,$weight,$imagen,$icon,$descript,$culture,$idiom){
            parent::__construct($id, $name,$dni, $height,$weight,$imagen,$icon,$descript);
    
            $this->culture = $culture;
            $this->idiom = $idiom;
        }
    
       
        } 
    class Elfo extends Persona {

        public $hat;
        public $village;
        
        
        function __construct($id, $name,  $dni,$height,$weight,$imagen,$icon,$descript,$hat,$village){
            parent::__construct($id, $name,$dni, $height,$weight, $imagen,$icon,$descript);
        
            $this->hat = $hat;
            $this->village = $village;
            }
        
           
            } 
    class Enano extends Persona {

        public $beardType;
        public $houseType;
                
                
            function __construct($id, $name,$dni, $height,$weight,$imagen, $icon,$descript,$beardType,$houseType){
            parent::__construct($id, $name,$dni, $height,$weight,$imagen,$icon, $descript);
                
                $this->beardType = $beardType;
                $this->houseType = $houseType;
                    }
                
                   
                    } 




?>


    
</body>
</html>

