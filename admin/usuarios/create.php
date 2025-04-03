<?php
include '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo'];

    $sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES ('$nome', '$email', '$senha', '$tipo')";
    
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
    <title>Cadastrar Usuário</title>
</head>
<body>
    <form action="" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Senha:</label>
        <input type="password" name="senha" required><br>

        <label>Tipo:</label>
        <select name="tipo">
            <option value="admin">Admin</option>
            <option value="medico">Médico</option>
            <option value="recepcionista">Recepcionista</option>
            <option value="paciente">Paciente</option>
        </select><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
