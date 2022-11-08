<?php


     date_default_timezone_set('Africa/Johannesburg');
     define('HOST','localhost');
     define('USUARIO','root');
     define('SENHA','');
     define('BD','biblioteca2');

    $conexao = mysqli_connect(HOST,USUARIO,SENHA,BD) or die('Nao conectou!');
     mysqli_set_charset($conexao,"utf8");



?>