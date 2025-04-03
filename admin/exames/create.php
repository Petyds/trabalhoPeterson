<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paciente_id = $_POST['paciente_id'];
    $consulta_id = $_POST['consulta_id'];
    $tipo_exame = $_POST['tipo_exame'];
    $resultado = $_POST['resultado'];
    $data_exame = $_POST['data_exame'];

    $sql = "INSERT INTO exames (paciente_id, consulta_id, tipo_exame, resultado, data_exame) 
            VALUES ('$paciente_id', '$consulta_id', '$tipo_exame', '$resultado', '$data_exame')";

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
    <title>Cadastrar Exame</title>
</head>
<body>
    <form action="" method="POST">
        <label>ID do Paciente:</label>
        <input type="number" name="paciente_id" required><br>

        <label>ID da Consulta (opcional):</label>
        <input type="number" name="consulta_id"><br>

        <label>Tipo de Exame:</label>
        <input type="text" name="tipo_exame" required><br>

        <label>Resultado:</label>
        <textarea name="resultado"></textarea><br>

        <label>Data do Exame:</label>
        <input type="date" name="data_exame" required><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
