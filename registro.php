<?php
$usuario="root";
$clave="";
$servidor="localhost";
$db="registros";

$enlace = new mysqli($servidor,$usuario,$clave,$db);

    if($enlace->connect_errno)
    {
        echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
        exit();
    }

$nombre  = $_POST["user_name"];
$correo    = $_POST["user_email"];
$mensaje   = $_POST["message"];



$insertarDatos ="INSERT INTO datos(nombre,correo,mensaje) values('$nombre','$correo','$mensaje')";
if($enlace->query($insertarDatos))
    {
        echo "<script> alert('registrado');window.location= './form.html' </script>";
    }
    else 
    {
        echo "Error: " .$queryregistrar."<br>";
    }
//$enlace->query($insertarDatos);
//$insertarDatos->close();
$enlace->close();
 //$ejecutarinsertar = mysqli_query($enlace, $insertarDatos) ;
 /*if($ejecutarinsertar){
     echo"error en la linea de sql";
 } */

?>