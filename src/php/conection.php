<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "teaminfine";

$conn = new mysqli($servername, $username, $password, $db);

        if($conn->connect_error){
            die("Conexion fallida: ". $conn->connect_error);
        }
?>