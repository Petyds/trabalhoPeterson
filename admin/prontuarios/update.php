<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $diagnostico = $_POST['diagnostico'];
    $prescricao = $_POST['prescricao'];
    $observacoes = $_POST['observacoes'];

    $sql = "UPDATE prontuarios SET diagnostico='$diagnostico', prescricao='$prescricao', observacoes='$observacoes' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>
