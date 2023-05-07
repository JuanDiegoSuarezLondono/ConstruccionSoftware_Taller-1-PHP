<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Empleado implements user{

   var $sueldo;
   var $puesto;
   var $titulo;
   var $idEmpleado;

   function empleado($mySueldo, $myPuesto, $myTitulo,$myIdEmpleado)
   {
       $this->sueldo = $mySueldo;
       $this->puesto = $myPuesto;
       $this->titulo = $myTitulo;
       $this->idEmpleado = $myIdEmpleado;
   }

   function getSueldo()
   {
       return $this->sueldo;
   }

   function setSueldo($mySueldo)
   {
       $this->sueldo = $mySueldo;
   }
   
   function getPuesto()
   {
       return $this->puesto;
   }

   function setPuesto($myPuesto)
   {
       $this->puesto = $myPuesto;
   }
   
   function gettitulo()
   {
       return $this->titulo;
   }

   function setTitulo($myTitulo)
   {
       $this->titulo = $myTitulo;
   }
   
   function getIdEmpleado()
   {
       return $this->idEmpleado;
   }

   function setIdEmpleado($myIdEmpleado)
   {
       $this->idEmpleado = $myIdEmpleado;
   }

}
?>