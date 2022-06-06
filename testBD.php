<?php

$servername = "localhost";
$username = "id19051977_root";
$password = "8612144Neptuno+";
$database = "id19051977_productos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$nombre="Samuel";
$apellido="Jackson";
$celular="1127644532";


$sql2="INSERT INTO clientes (id,nombre,apellido,celular) VALUES (NULL,'$nombre','$apellido','$celular')";
mysqli_query($conn,$sql2);
?>