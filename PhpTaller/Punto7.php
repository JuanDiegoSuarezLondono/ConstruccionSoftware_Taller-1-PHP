<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$departamentosCapitales["Boyaca"] = "Tunja";
$departamentosCapitales["Caqueta"] = "Florencia";
$departamentosCapitales["Amazonas"] = "leticia";

print_r($departamentosCapitales);

$departamentos=array_keys($departamentosCapitales);
echo "<br>";
print_r($departamentos);

//Imprima en pantalla la capital de Amazonas
echo "<br>";
print_r($departamentosCapitales["Amazonas"]);
   
//Imprima el departamento con índice 2
echo "<br>";
print_r($departamentos[2]);

?>