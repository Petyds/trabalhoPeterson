<?php
include '../conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM medicos WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Médico</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>CRM:</label>
        <input type="text" name="crm" value="<?= $row['crm'] ?>" required><br>

        <label>Especialidade:</label>
        <input type="text" name="especialidade" value="<?= $row['especialidade'] ?>" required><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
