<?php
include '../../config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM prontuarios WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Prontuário</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Diagnóstico:</label>
        <textarea name="diagnostico" required><?= $row['diagnostico'] ?></textarea><br>

        <label>Prescrição:</label>
        <textarea name="prescricao"><?= $row['prescricao'] ?></textarea><br>

        <label>Observações:</label>
        <textarea name="observacoes"><?= $row['observacoes'] ?></textarea><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
