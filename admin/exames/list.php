<?php
include '../conexao.php';

$sql = "SELECT exames.id, exames.paciente_id, exames.consulta_id, exames.tipo_exame, exames.resultado, exames.data_exame, exames.criado_em 
        FROM exames";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Exames</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Lista de Exames</h2>
    <a href="create.php" class="btn btn-success mb-3">Novo Exame</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Paciente</th>
                <th>ID Consulta</th>
                <th>Tipo de Exame</th>
                <th>Resultado</th>
                <th>Data do Exame</th>
                <th>Data de Criação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['paciente_id'] ?></td>
                    <td><?= $row['consulta_id'] ?></td>
                    <td><?= $row['tipo_exame'] ?></td>
                    <td><?= $row['resultado'] ?></td>
                    <td><?= $row['data_exame'] ?></td>
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
