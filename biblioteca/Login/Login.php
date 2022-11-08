<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
    <title>Login Biblioteca</title>
    <style>
      *{
        margin: 0px;
      }
      

      .vixo{
        vertical-align: middle;
        margin-left: -45px;
      
      }
      
     main{
      max-width: 800px;
      margin: auto;
     }
     
     :root{
      --cor0:#F1CF1E;
      --cor1:#A8A7A7;
      --cor2:#23A0D8;
      --cor3:#E8F6FF;
     }
     body{
      background-image: linear-gradient(to right,var(--cor2),var(--cor3));
      background-image: url('../Imagens/Beira_center_2000.jpg');
      background-attachment: fixed;
      background-position: left center;
      background-repeat: no-repeat;
      background-size: cover;
      
     }
     table{
       
        margin: auto;
        background-image: linear-gradient(to right,var(--cor2),var(--cor3));
        padding: 5px;
        border-radius: 15px;
        box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.425);
        min-width: 320px;
        max-width: 800px;
        margin-top:50px;
        margin-bottom: 50px;
      }
      .facil{
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1em;
      }
      input{
       
        padding: 7px;
       
      }
      input:hover{
        border-bottom: 2px solid var(--cor0);
        transition: 1s;
      }
      input:focus{
        background-color: var(--cor3);
      }
      #Cadastrar:hover{
        box-shadow: 2px 2px 2px  black;
        transition-duration: 0.5s;
        background-image: linear-gradient(to right, var(--cor2),var(--cor3));
      }
      input:focus{
        background-color: var(--cor3);
      }
     
    </style>
</head>
<body>
  <main>
    <form method="post">
        <table>
            <tr>
                <th colspan="2"><label for="Logo"><img src="../Imagens/Logo do munícipio da Beira.png" width="150" height="" alt=""></label></th>
    
            </tr>
            <?php
											if(isset($_SESSION['nao_autenticado'])): ?>
											
                      <th colspan="2"><label for="Logo">Usuario ou Senha Invalido</label></th>
											<?php
											endif;
											unset($_SESSION['nao_autenticado']);
										?>

    
            <tr>
                <td class="facil"><label for="Email"></label></td>
                <td><input type="email" name="txtemail" id="Email" placeholder="Email" required></td>
               </tr>
               <tr>
                <td class="facil"><label for="Senha"></label></td>
                <td><input type="password" name="txtsenha" id="Senha" placeholder="Senha" required>
                 <img src="../Imagens/vixio.png" onclick="Showhide()" class="vixo"  alt="">
               </td>
              </tr>
              <tr>
                <td class="facil"><input type="submit" name="buttonLogin"  id="Cadastrar" value="Login"></td>
                
              </tr>
              <tr>
                <td></td>
                <td>Ainda não tem conta? <a href="../cadastro/Cadasro.php">Cadastre-se</a></td>
              </tr>
        </table>
    </form>
</main>
<script>
   function Showhide(){
     var tipo= document.getElementById("Senha");
     if(tipo.type == "password"){
       tipo.type="text";


     }else{
      tipo.type="password";
     }


   }

</script>
</body>

<?php

if(isset($_POST['buttonLogin'])){

include('../conexao.php');
session_start();
if(empty($_POST['txtemail']) || empty($_POST['txtsenha'])){
    header('Location: /biblioteca/login/login.php');
    exit();
}


$email = mysqli_real_escape_string($conexao, $_POST['txtemail']);
$senha = mysqli_real_escape_string($conexao, $_POST['txtsenha']);

$query = "select * from usuarios where email ='{$email}' and senha
            ='{$senha}'
";

$result =   mysqli_query($conexao, $query);
$dado   =   mysqli_fetch_array($result);
$row = mysqli_num_rows($result);


if($row > 0){
    $_SESSION['id'] = $dado["id"];
    $_SESSION['email'] = $email;
    $_SESSION['nome_usuario'] = $dado["nome"];
    $_SESSION['nivel'] = $dado["nivel"];
    

    if($_SESSION['nivel'] == 'administrador' ){
        header('Location: /biblioteca/admin'); 
        exit();
    }

    if($_SESSION['nivel'] == 'usuario'){
         header('Location: /biblioteca'); 
        exit();
    }else{
         header('Location: /biblioteca'); 
        exit();
    }
    
     
    

    exit();
}else{
    
    $_SESSION['nao_autenticado'] = true;
    header('Location: /biblioteca/login/login.php');
    exit();
}
}



?>
</html>