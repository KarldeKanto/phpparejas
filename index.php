






















































































































    <?php

        include 'Equipament.php';
        
        $make = file_get_contents("SaveEquip.json");                                              
        $transform = json_decode($make, true);
        $array_equipament = array();
        $fecha = date("Y");

        foreach($transform as $i){
            $date = date("Y");
            $result = date("Y", strtotime($i["create"]));
            $date = $date - $result;
            if ($i["type"] == "Arco"){
                $arch = new Arch($i["id"],$i["name"],$date,$i["dimension_long"],$i["dimension_wide"],$i["weight"],$i["image"],$i["icon"],$i["description"], $i["wood"],$i["arrow"]);
                array_push($array_equipament, $arch);
            }
            else if ($i["type"] == "Espada"){
                $sword = new Sword($i["id"],$i["name"],$date,$i["dimension_long"],$i["dimension_wide"],$i["weight"],$i["image"],$i["icon"],$i["description"], $i["blade"],$i["handle"]);
                array_push($array_equipament, $sword);
            }
            else if ($i["type"] == "Casco"){
                $helmet = new Helmet($i["id"],$i["name"],$date,$i["dimension_long"],$i["dimension_wide"],$i["weight"],$i["image"],$i["icon"],$i["description"], $i["form"],$i["protection"]);
                array_push($array_equipament, $helmet);
            }
            else if ($i["type"] == "Hacha"){
                $axe = new Axe($i["id"],$i["name"],$date,$i["dimension_long"],$i["dimension_wide"],$i["weight"],$i["image"],$i["icon"],$i["description"], $i["material"],$i["hands"]);
                array_push($array_equipament, $axe);
            }
        }

        echo"<div class='tabla'>";
            echo "<table class='tabla'>";
            echo "<tr><td>Id</td><td>Nombre</td><td>Fecha de Creacion</td><td>Dimension largo</td><td>Dimension Ancho</td><td>Peso</td><td>Imagen</td><td>Caracterista 1</td><td>Caracterista 2</td><td>Imagen</td><td>Icono</td><td>Descripcion</td>";
            foreach($array_equipament as $y){
                echo "<tr><td>" . $y->id . "</td>";
                echo "<td>" . $y->name . "</td>";
                echo "<td>" . $y->antiquity . "</td>";
                echo "<td>" . $y->dimension_long . "</td>";
                echo "<td>" . $y->dimension_wide . "</td>";
                echo "<td>" . $y->weight . "</td>";
                echo "<td>" . $y->weight . "</td>";
                if (get_class($y) == "Arch"){
                    $savecharacteristicone = $y->wood;
                    $savecharacteristictwo = $y->arrow;
                }
                else if (get_class($y) == "Sword"){
                    $savecharacteristicone = $y->blade;
                    $savecharacteristictwo = $y->handle;
                }
                else if (get_class($y) == "Helmet"){
                    $savecharacteristicone = $y->form;
                    $savecharacteristictwo = $y->protection;
                }
                else if (get_class($y) == "Axe"){
                    $savecharacteristicone = $y->material;
                    $savecharacteristictwo = $y->hands;
                }
                echo "<td>" . $savecharacteristicone . "</td>";
                echo "<td>" . $savecharacteristictwo . "</td>";
                echo "<td><img src='" . $y->image . "'></td>";
                echo "<td class='icon'>" . $y->icon . "</td>";
                echo "<td>" . $y->description . "</td></tr>";

            }
            echo "</table>";
        echo"</div>";
    ?>

    <div class="redes">
        <ul>        
            <li><a href="index.php"><i class="fab fa-critical-role"></i></a></li>                                               <!-- Esto sirve para que veamos nuestro logo -->
            <li><a href="privacidad.php"><i class="fa-solid fa-user-lock"></i></a></li>                                         <!-- Esto nos lleva a una pagina donde esta la politica de privacidad -->
            <li><a href="https://www.facebook.com/christian.pereztorres.90"><i class="fab fa-facebook-f"></i></a></li>          <!-- Esto sirve para un enlace a Facebook -->
            <li><a href="https://twitter.com/s0yuncarl"><i class="fab fa-twitter"></a></i></li>                                 <!-- Esto sirve para un enlace a Twitter -->
            <li><a href="https://www.instagram.com/s0yuncarl"><i class="fab fa-instagram"></i></a></li>                         <!-- Esto sirve para un enlace a Instagram -->
            <li><a href="https://www.youtube.com/channel/UCFlMi1a7owadd78mrbE1xRA"><i class="fab fa-youtube"></i></a></li>      <!-- Esto sirve para un enlace a Youtube -->
        </ul>
    </div>

</body>
</html>