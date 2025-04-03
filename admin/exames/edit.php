<?php
include '../../config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM exames WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Exame</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Tipo de Exame:</label>
        <input type="text" name="tipo_exame" value="<?= $row['tipo_exame'] ?>" required><br>

        <label>Resultado:</label>
        <textarea name="resultado"><?= $row['resultado'] ?></textarea><br>

        <label>Data do Exame:</label>
        <input type="date" name="data_exame" value="<?= $row['data_exame'] ?>" required><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
