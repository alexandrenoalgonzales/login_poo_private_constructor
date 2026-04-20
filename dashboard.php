</div>
<a href="index.php">Logoff</a>
<div>

<?php 

require 'classes/login.php';
use classes\login;

// Pegamos os dados (aqui mudei para POST como você mencionou)
$user = $_POST['user'] ?? '';
$senha = $_POST['senha'] ?? '';

// Passamos os dados direto na criação do objeto (Injeção via Construtor)
$login = new Login($user, $senha);

// Chamamos o método e imprimimos o resultado
echo $login->Logar();