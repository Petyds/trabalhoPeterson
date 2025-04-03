<?php
include '../conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM pacientes WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Paciente</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Data de Nascimento:</label>
        <input type="date" name="data_nascimento" value="<?= $row['data_nascimento'] ?>" required><br>

        <label>CPF:</label>
        <input type="text" name="cpf" value="<?= $row['cpf'] ?>" required><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?= $row['telefone'] ?>"><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
