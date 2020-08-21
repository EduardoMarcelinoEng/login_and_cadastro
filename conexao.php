<?php

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'login');

//O or die é responsável pelo erro caso não consiga conectar no banco de dados
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar no banco de dados!');

?>