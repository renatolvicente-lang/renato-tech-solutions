<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "rtsolution";

$conn = new mysqli($host, $user, $password, $database);

if(!$conn){
    die("deu ruim na conexão aqui");
    }

?>