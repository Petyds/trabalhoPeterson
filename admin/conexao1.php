<?php
$servername = "162.241.62.242 ";
$username = "fabia084_bianomx";
$password = "Bi4noGiIsa23*";
$dbname = "fabia084_hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>