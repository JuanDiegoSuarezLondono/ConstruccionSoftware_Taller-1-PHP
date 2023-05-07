   <?php
   
//Primera parte
 $title = "Arqueólogos identifican una aguja para tatuar de 2.000 años "
            . "de antigüedad";
    
$body = "La herramienta está hecha a partir de un conjunto de espinas de "
    . "cactus de nopal, las puntas están saturadas con pigmento oscuro,"
    . " insertadas en un palo cortado de una planta de bayas de limonada "
    . "y se ataban con fibra de yuca y atadas con fibra de yuca";
    
//Segunda parte       
   echo $title;
   echo "<br>";
   echo $body;

//Tercera parte
   echo "<h1>".$title."</h1>";
   echo "<br>";
   echo "<p>".$body."</p>";

//Cuarta parte   
   echo "<h1>{$title}</h1><p> {$body}</p>";

//Quinta parte
   $valor = 4.2454654;
   echo sprintf("%1.2f",$valor);
?>