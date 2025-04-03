<?php
include '../../config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $row['nome'] ?>" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $row['email'] ?>" required><br>

        <label>Tipo:</label>
        <select name="tipo">
            <option value="admin" <?= $row['tipo'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="medico" <?= $row['tipo'] == 'medico' ? 'selected' : '' ?>>Médico</option>
            <option value="recepcionista" <?= $row['tipo'] == 'recepcionista' ? 'selected' : '' ?>>Recepcionista</option>
            <option value="paciente" <?= $row['tipo'] == 'paciente' ? 'selected' : '' ?>>Paciente</option>
        </select><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
