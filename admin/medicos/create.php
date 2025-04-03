<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST['usuario_id'];
    $crm = $_POST['crm'];
    $especialidade = $_POST['especialidade'];

    $sql = "INSERT INTO medicos (usuario_id, crm, especialidade) VALUES ('$usuario_id', '$crm', '$especialidade')";

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
    <title>Cadastrar Médico</title>
</head>
<body>
    <form action="" method="POST">
        <label>ID do Usuário:</label>
        <input type="number" name="usuario_id" required><br>

        <label>CRM:</label>
        <input type="text" name="crm" required><br>

        <label>Especialidade:</label>
        <input type="text" name="especialidade" required><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
