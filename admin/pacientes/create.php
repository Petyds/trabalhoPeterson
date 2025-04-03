<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST['usuario_id'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO pacientes (usuario_id, data_nascimento, cpf, telefone) 
            VALUES ('$usuario_id', '$data_nascimento', '$cpf', '$telefone')";

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
    <title>Cadastrar Paciente</title>
</head>
<body>
    <form action="" method="POST">
        <label>ID do Usuário:</label>
        <input type="number" name="usuario_id" required><br>

        <label>Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required><br>

        <label>CPF:</label>
        <input type="text" name="cpf" required><br>

        <label>Telefone:</label>
        <input type="text" name="telefone"><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
