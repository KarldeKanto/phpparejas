<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css%22%3E">
	<title>Document</title>
	<script src="https://kit.fontawesome.com/38ff115098.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="bonito_index.css">    
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" href="indexArtArriba.css">

</head>


<body>
<div class="header">
        <ul>        
            <li><a href="index.php"><i class="fab fa-critical-role"></i></a></li> 
			<li id="Title"> The lefty Monster</li> 

            <li><a href="index.php"> <i class="fas fa-clinic-medical"></i>Inicio</a></li>                                                              
            <li><a href="PreguntasFrecuentes.php"><i class="fas fa-question"></i>Preguntas Frentes</a></li>         
            <li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a></li>                           
        </ul>
    </div>

<?php
function ValidarDNI($DNI){
	$contDNI=0;
	$RTurn;
	if (strlen($DNI) ==9 && is_string($DNI[8]) ){
		for ($i=0;$i<8;$i++){
			if(is_numeric($DNI[$i]) ){
				$contDNI++;
			}
		}
	}
	if ($contDNI == 8){
		$RTurn = "(Valido)";
	}else{
		$RTurn = "(invalido)";
	}
	return $RTurn;
	
}


	$arrayObject = array();
	$data = file_get_contents("tarea2_pareja_personajes.json");
	$json = json_decode($data, true);
	include "ejercicioPorParejas.php" ; //aqui estan los objetos
	foreach ($json as $i){   // este bucle recorre el json y llama a los objetos y los mete en la array
		if ($i["type"] == "Hombre"){
			$obj = new humano($i["id"],$i["name"],$i["dni"],$i["height"],$i["weight"],$i["imagen"],$i["icon"],$i["descript"],$i["culture"],$i["idiom"]);
			
		}
		else if ($i["type"]== "Elfo"){
			$obj = new Elfo($i["id"],$i["name"],$i["dni"],$i["height"],$i["weight"],$i["imagen"],$i["icon"],$i["descript"],$i["hat"],$i["village"]);

		}
		else if ($i["type"]== "Orco"){
			$obj = new Orco($i["id"],$i["name"],$i["dni"],$i["height"],$i["weight"],$i["imagen"],$i["icon"],$i["descript"],$i["teeth"],$i["species"]);
				
		}else if ($i["type"]== "Enano"){
			$obj = new humano($i["id"],$i["name"],$i["dni"],$i["height"],$i["weight"],$i["imagen"],$i["icon"],$i["descript"],$i["beardType"],$i["houseType"]);
				
		}

		array_push($arrayObject,$obj);
		
	}



	echo "<table border= 1px > <tr><td>ID</td><td>Nombre</td><td>DNI</td><td>Altura</td><td>Peso</td><td>imagen</td><td>icono</td><td>descripcion</td><td>Caracteristica Alternativa primaria</td><td>Caracteristica Alternativa Secundaria</td>";


	foreach ($arrayObject as $j){
		echo "<tr><td>" . $j->id . "</td>";
		echo "<td>" . $j->name . "</td>";
		echo "<td>" . ValidarDNI($j->dni) . "</td>";
		echo "<td>" . $j->height . "</td>";
		echo "<td>" . $j->weight . "</td>";
		echo "<td> <img src='" . $j->imagen . "' ></td>";
		echo "<td>" . $j->icon . "</td>";
		echo "<td>" . $j->descript . "</td>";
		if ( get_class($j)  == "humano"){
			$SaveAtrivuto1= "cultura: <br>" . $j->culture;
			$SaveAtrivuto2=  "Idioma: <br>" .$j->idiom;
		} else if ( get_class($j) == "Enano"){

			$SaveAtrivuto1="Tipo de barba: <br>" . $j->beardType;
			$SaveAtrivuto2=   "Tipo de casa: <br>" . $j->houseType;
		}else if ( get_class($j) == "Orco"){
			$SaveAtrivuto1="Dientes: <br>" . $j->teeth;
			$SaveAtrivuto2= "Especie: <br>" . $j->species;
		}else if ( get_class($j) == "Elfo"){
			$SaveAtrivuto1=  "gorro: <br>" .$j->hat;
			$SaveAtrivuto2=  "Aldea: <br>" .$j->village;
			
		}

		echo "<td> "  . $SaveAtrivuto1. "</td>";
		echo "<td>" . $SaveAtrivuto2 . "</td></tr>";
		
	}
	
?>
	
