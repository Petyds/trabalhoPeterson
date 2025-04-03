<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $consulta_id = $_POST['consulta_id'];
    $diagnostico = $_POST['diagnostico'];
    $prescricao = $_POST['prescricao'];
    $observacoes = $_POST['observacoes'];

    $sql = "INSERT INTO prontuarios (consulta_id, diagnostico, prescricao, observacoes) 
            VALUES ('$consulta_id', '$diagnostico', '$prescricao', '$observacoes')";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Prontuário</title>
</head>
<body>
    <form action="" method="POST">
        <label>ID da Consulta:</label>
        <input type="number" name="consulta_id" required><br>

        <label>Diagnóstico:</label>
        <textarea name="diagnostico" required></textarea><br>

        <label>Prescrição:</label>
        <textarea name="prescricao"></textarea><br>

        <label>Observações:</label>
        <textarea name="observacoes"></textarea><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
