<!DOCTYPE html>
<!-- Source Codes By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administração |  Login</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="../css/login.css" /> -->
</head>
<body>

<?php
$host = "localhost"; // Servidor do banco de dados
$dbname = "hospital_db"; // Nome do banco de dados
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

//echo "conexao bem sucedida!";

//$sql = "SELECT * FROM usuarios";
$sql = "SELECT * FROM usuarios";
$result = $pdo->query($sql);

foreach ($result as $row) {
    echo "ID: " . $row['id'] . " - Nome: " . $row['nome'] . " - tipo: " . $row['tipo'] . " - Email: " . $row['email'] . "<br>";
}

// try {
//     // Criar conexão usando PDO
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
//     // Configurar para lançar exceções em caso de erro
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "<h2 class='text-center text-success'>Conexão bem-sucedida!</h2>";
// } catch (PDOException $e) {
//     echo "Erro na conexão: " . $e->getMessage();
// }

?>

</body>
</html>