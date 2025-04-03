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
    <title>Cadastro de Exames</title>
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
    <h2 class="text-center">Cadastro de Exames</h2>
    <form id="formExame" action="crud/exames.php" method="POST" onsubmit="return validarFormulario('formExame')">
        <div class="form-group">
            <label for="paciente_id">ID do Paciente:</label>
            <input type="number" class="form-control" id="paciente_id" name="paciente_id" required>
        </div>
        <div class="form-group">
            <label for="consulta_id">ID da Consulta (Opcional):</label>
            <input type="number" class="form-control" id="consulta_id" name="consulta_id">
        </div>
        <div class="form-group">
            <label for="tipo_exame">Tipo de Exame:</label>
            <input type="text" class="form-control" id="tipo_exame" name="tipo_exame" required>
        </div>
        <div class="form-group">
            <label for="resultado">Resultado:</label>
            <textarea class="form-control" id="resultado" name="resultado"></textarea>
        </div>
        <div class="form-group">
            <label for="data_exame">Data do Exame:</label>
            <input type="date" class="form-control" id="data_exame" name="data_exame" required>
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
