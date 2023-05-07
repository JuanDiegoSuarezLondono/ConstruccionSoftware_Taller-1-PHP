<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$estudiantes = array("Diego", "Oscar", "Santiago", "Nicolas");
array_push($estudiantes, "Tom", "Jerry");

foreach($estudiantes as $estudiante){
    
    echo $estudiante."<br>";
} 

?>