<?php
include '../../config.php';

$sql = "SELECT prontuarios.id, consultas.id AS consulta_id, prontuarios.diagnostico, prontuarios.prescricao, prontuarios.observacoes, prontuarios.criado_em 
        FROM prontuarios
        JOIN consultas ON prontuarios.consulta_id = consultas.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Prontuários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Lista de Prontuários</h2>
    <a href="create.php" class="btn btn-success mb-3">Novo Prontuário</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Consulta</th>
                <th>Diagnóstico</th>
                <th>Prescrição</th>
                <th>Observações</th>
                <th>Data de Criação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['consulta_id'] ?></td>
                    <td><?= $row['diagnostico'] ?></td>
                    <td><?= $row['prescricao'] ?></td>
                    <td><?= $row['observacoes'] ?></td>
                    <td><?= $row['criado_em'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
