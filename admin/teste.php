<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para adicionar usuário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_user'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo'];
    
    $sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES ('$nome', '$email', '$senha', '$tipo')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário adicionado com sucesso.";
    } else {
        echo "Erro: " . $conn->error;
    }
}

// Listar usuários
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Usuários</title>
</head>
<body>
    <h2>Adicionar Usuário</h2>
    <form method="post">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        Tipo: <select name="tipo">
            <option value="admin">Admin</option>
            <option value="medico">Médico</option>
            <option value="recepcionista">Recepcionista</option>
            <option value="paciente">Paciente</option>
        </select><br>
        <button type="submit" name="add_user">Adicionar</button>
    </form>

    <h2>Lista de Usuários</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['tipo']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
                    <a href="excluir.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza?');">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
