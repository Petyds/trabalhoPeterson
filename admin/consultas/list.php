<?php
include '../../config.php';

$sql = "SELECT consultas.id, pacientes.usuario_id AS paciente, medicos.usuario_id AS medico, consultas.data_hora, consultas.descricao, consultas.status 
        FROM consultas
        JOIN pacientes ON consultas.paciente_id = pacientes.id
        JOIN medicos ON consultas.medico_id = medicos.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Consultas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Lista de Consultas</h2>
    <a href="create.php" class="btn btn-success mb-3">Nova Consulta</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Data e Hora</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['paciente'] ?></td>
                    <td><?= $row['medico'] ?></td>
                    <td><?= $row['data_hora'] ?></td>
                    <td><?= $row['descricao'] ?></td>
                    <td><?= $row['status'] ?></td>
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
<?php
include '../../config.php';

$sql = "SELECT consultas.id, pacientes.usuario_id AS paciente, medicos.usuario_id AS medico, consultas.data_hora, consultas.descricao, consultas.status 
        FROM consultas
        JOIN pacientes ON consultas.paciente_id = pacientes.id
        JOIN medicos ON consultas.medico_id = medicos.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Consultas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Lista de Consultas</h2>
    <a href="create.php" class="btn btn-success mb-3">Nova Consulta</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Data e Hora</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['paciente'] ?></td>
                    <td><?= $row['medico'] ?></td>
                    <td><?= $row['data_hora'] ?></td>
                    <td><?= $row['descricao'] ?></td>
                    <td><?= $row['status'] ?></td>
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
