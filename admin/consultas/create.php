<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paciente_id = $_POST['paciente_id'];
    $medico_id = $_POST['medico_id'];
    $data_hora = $_POST['data_hora'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $sql = "INSERT INTO consultas (paciente_id, medico_id, data_hora, descricao, status) 
            VALUES ('$paciente_id', '$medico_id', '$data_hora', '$descricao', '$status')";

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
    <title>Cadastrar Consulta</title>
</head>
<body>
    <form action="" method="POST">
        <label>ID do Paciente:</label>
        <input type="number" name="paciente_id" required><br>

        <label>ID do Médico:</label>
        <input type="number" name="medico_id" required><br>

        <label>Data e Hora:</label>
        <input type="datetime-local" name="data_hora" required><br>

        <label>Descrição:</label>
        <textarea name="descricao"></textarea><br>

        <label>Status:</label>
        <select name="status">
            <option value="agendada">Agendada</option>
            <option value="realizada">Realizada</option>
            <option value="cancelada">Cancelada</option>
        </select><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
