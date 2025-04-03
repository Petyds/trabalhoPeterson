<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tipo_exame = $_POST['tipo_exame'];
    $resultado = $_POST['resultado'];
    $data_exame = $_POST['data_exame'];

    $sql = "UPDATE exames SET tipo_exame='$tipo_exame', resultado='$resultado', data_exame='$data_exame' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}
?>
