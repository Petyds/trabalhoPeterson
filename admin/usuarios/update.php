<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];

    $sql = "UPDATE usuarios SET nome='$nome', email='$email', tipo='$tipo' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>
