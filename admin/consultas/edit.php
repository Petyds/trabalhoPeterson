<?php
include '../../config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM consultas WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Consulta</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Data e Hora:</label>
        <input type="datetime-local" name="data_hora" value="<?= $row['data_hora'] ?>" required><br>

        <label>Descrição:</label>
        <textarea name="descricao"><?= $row['descricao'] ?></textarea><br>

        <label>Status:</label>
        <select name="status">
            <option value="agendada" <?= $row['status'] == 'agendada' ? 'selected' : '' ?>>Agendada</option>
            <option value="realizada" <?= $row['status'] == 'realizada' ? 'selected' : '' ?>>Realizada</option>
            <option value="cancelada" <?= $row['status'] == 'cancelada' ? 'selected' : '' ?>>Cancelada</option>
        </select><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
