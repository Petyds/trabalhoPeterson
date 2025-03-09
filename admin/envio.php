<?php 

include  '../templates-parts/header-admin.php'; ?>

<div class="container">

<?php
echo "<h1 class='h1'>Resultado do formulario de cadastro</h1>";
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$conf_senha = $_POST["conf-senha"];
$senha = $_POST["senha"];
//$dob = $_POST["dob"];
$address = $_POST["address"];
$message = $_POST["message"];

if($conf_senha == $senha){
   echo "iguais";
}else{
   echo "diff";
}
exit;

echo "Meu nome é " . $nome . " sobrenome " . $sobrenome . ".</br>";
echo "Email de contato: " . $email . ".</br>";
echo "Data: " . $dob . ".</br>";
echo "Moro neste endereço: " . $address . ".</br><hr>";
echo "Mensagem: " . $message . ".</br></br>";
exit; ?>

</div>
<?php
   include  '../templates-parts/footer-admin.php'; ?>