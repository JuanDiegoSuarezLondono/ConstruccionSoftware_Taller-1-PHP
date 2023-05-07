<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$marcas="mazda,nissan,toyota,chevrolet,fiat,renault";

$arrayMarcas= explode(",", $marcas);
echo $arrayMarcas[3];
echo "<br>";
var_dump($arrayMarcas);
echo "<br>";
foreach ($arrayMarcas as $key => $value) {
    echo $key."  ".$value."<br>";
}
implode(",",$arrayMarcas);
var_dump($marcas);
?>