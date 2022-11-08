<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    
<p><a href="../">voltar</a></p>


<br>

<p>lista dos livros</p>

<form method="POST">
    <label for="">Nome do livro</label>
    <input name="txtnome" type="text" placeholder="Nome do livro"> <br>


    <label for="">Genero do livro</label>
    <input name="txtgenero" type="text" placeholder="Nome do livro"> <br>
    <label for="">Codigo do livro</label>
    <input name="txtcod" type="text" placeholder="Codigo"><br>
    <label for="">Descricao do livro</label>
    <input  name="txtdesc" type="text" placeholder="Descricao">

    <button name="buttonCadastrar">Salvar</button>
</form>

</body>
</html>


<?php
include('../../conexao.php');

  if(isset($_POST['buttonCadastrar'])){

   
	  $nome = $_POST['txtnome'];
      $genero = $_POST['txtgenero'];
	  $cod = $_POST['txtcod'];
	  $desc = $_POST['txtdesc'];



   

    $query = "INSERT INTO `livro`( `nome`, `genero_id`, `codigo`, `descricao`, `data`)
			VALUES ('$nome','$genero','$cod','$desc',CURRENT_DATE)";

    
 
    $result =   mysqli_query($conexao, $query);
    var_dump($result);
    
    if($result == ''){
      echo"<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar'); </script>";
      
    }else{
      echo"<script language='javascript'>window.alert('Salvo com Sucesso'); </script>";
      echo"<script language='javascript'>window.location='../'; </script>";
    }

  }
?>