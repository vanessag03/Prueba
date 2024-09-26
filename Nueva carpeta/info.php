<?php
$valor=$_POST['seleccion'];
$con= new mysqli('localhost', 'root', '1234', 'northwind');

$consulta = "Select * from supplier where companyName LIKE '%valor%'";

$ex = mysqli_query($con, $consulta);
    while($filas=mysqli_fetch_array($ex)){
        echo $filas[1]."<br>";
    }
?>