<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$unEstudiante = array(
    "edad" => 20,
    "codigo" => 211654,
    "genero" => "masculino",
    "altura" => 172,
    "nombre" => "Armando"
);

foreach ($unEstudiante as $key => $value) {
    echo $key."  ".$value."<br>";
}

?>