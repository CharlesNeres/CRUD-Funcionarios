<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "crudsimples";

$link = mysqli_connect($host, $usuario, $senha, $banco);


// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<p>Connected successfully</p>";

?>
