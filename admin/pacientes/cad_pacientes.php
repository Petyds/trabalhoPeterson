<?php
// config.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro de Pacientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .error-message {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Cadastro de Pacientes</h2>
    <form id="formPaciente" action="crud/pacientes.php" method="POST" onsubmit="return validarFormulario('formPaciente')">
        <div class="form-group">
            <label for="usuario_id">ID do Usuário:</label>
            <input type="number" class="form-control" id="usuario_id" name="usuario_id" required>
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <textarea class="form-control" id="endereco" name="endereco"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<script>
function validarFormulario(formId) {
    let form = document.getElementById(formId);
    let campos = form.querySelectorAll("input[required], textarea[required]");
    let valido = true;
    
    campos.forEach(campo => {
        let erro = campo.nextElementSibling;
        if (!erro || !erro.classList.contains('error-message')) {
            erro = document.createElement('div');
            erro.classList.add('error-message');
            campo.parentNode.appendChild(erro);
        }
        
        if (campo.value.trim() === "") {
            erro.textContent = "Este campo é obrigatório.";
            campo.classList.add("is-invalid");
            valido = false;
        } else {
            erro.textContent = "";
            campo.classList.remove("is-invalid");
            campo.classList.add("is-valid");
        }
    });
    
    return valido;
}
</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
