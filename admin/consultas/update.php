<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $data_hora = $_POST['data_hora'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $sql = "UPDATE consultas SET data_hora='$data_hora', descricao='$descricao', status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>
