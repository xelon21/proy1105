<?php
include '../lib/conexion.php';
$conn=new conexion;

if ($conn->conectar()){
$nom=$_POST["nombre"];
$totusd=$_POST["totalusd"];
$ano=$_POST["ano"];

$sql="INSERT INTO productos(nombre, totalusd, ano) values('$nom', $totusd, $ano)";

 echo $sql;
 
 
 $conn->objconn->query($sql);    