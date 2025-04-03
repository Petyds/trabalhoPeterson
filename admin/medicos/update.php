<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $crm = $_POST['crm'];
    $especialidade = $_POST['especialidade'];

    $sql = "UPDATE medicos SET crm='$crm', especialidade='$especialidade' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>
