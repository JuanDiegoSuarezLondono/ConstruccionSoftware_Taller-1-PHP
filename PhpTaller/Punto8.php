<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$estudiantes = array("Diego", "Oscar", "Santiago", "Nicolas");
print_r($estudiantes);
echo "<br>";

array_push($estudiantes, "Tom", "Jerry");
print_r($estudiantes);
echo "<br>";

unset($estudiantes[4]);
print_r($estudiantes);
echo "<br>";

$estudiantes[0] = "Jessie";
print_r($estudiantes);
echo "<br>";

?>