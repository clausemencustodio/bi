
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
    <title>Document</title>
    <style>
      *{
        margin: 0px;
      

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
      background-attachment: fixed;
      
     }
     table{
        margin: auto;
        background-color: white;
        padding: 5px;
        border-radius: 15px;
        box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.363);
        min-width: 320px;
        max-width: 800px;
        margin-top:50px;
       
  
      
      }
      .facil{
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1rem;
      }
      input{
      
        border: 1px 1px 1px #F1CF1E;
        height: 20px;
       

        
      }
      input:hover{
        border-bottom: 2px solid var(--cor0);
        transition: 1s;
      }
     

      #Identidade{
        margin-left:-80px ;
      } 
      input:focus{
        background-color: var(--cor3);
      }
      #Cadastrar:hover{
        box-shadow: 2px 2px 2px  black;
        transition-duration: 1s;
      
      } 
      #Reset:hover{
        box-shadow: 2px 2px 2px  black;
        transition-duration: 1s;
       
      }
      footer{
        position: relative;
        top: 90px;
        background-color: rgba(0, 0, 0, 0.068);
        color: var(--cor3);
       text-align: center;
        margin: auto;
        width: 100%;
      
        margin-top: 12px;
      }
      
    </style>
</head>
<body>
    <main>
    <form method="POST">  
            <table >
              <tr>
                <th colspan="2"><label for="Logo"><img src="../Imagens/Logo do munícipio da Beira.png" width="150" height="" alt=""></label></th>
              </tr>
        
              <tr>
                    <th colspan="2"><label for="Cadastro"><h3>Cadastro da Biblioteca Municipal</h3></label></th>
        
              </tr>
              <tr>
              
                <td colspan="2"><input type="text" name="txtnome" id="Nome"  required maxlength="77" size="38" placeholder="Primeiro Nome"></td>
              </tr>
        
              <tr>
             
                <td colspan="2"><input type="text" name="txtapelido" id="Apelido" required maxlength="77" size="38" placeholder="Apelido"></td>
              </tr>
              <tr>
               
                <td colspan="2">
                  <select name="txtgenero" id="Genero" required>
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                  </select>
                </td>
              </tr>
               <tr>
            
                <td colspan="2"><input type="text" name="txtendereco" id="Endereço" required size="38" placeholder="Endereço"></td>
               </tr>
              <tr>
              
                 <td colspan="2"><input type="text" name="txttelefone" id="Contacto" required maxlength="9" size="38" placeholder="Contacto(+258):"></td>
              <tr>
            
              <tr>
                
                <td colspan="2"><input type="number" name="txtidade" id="Idade" min="15" max="100" required placeholder="Idade:" ></td>
              </tr>
               <tr>
               
                 <td colspan="2"><input type="email" name="txtemail" id="Email" required size="38" placeholder="Email"></td>
               </tr>
               <tr>
                 <td colspan="2"><input type="password" name="txtsenha" id="Senha" required size="38" placeholder="Senha:"></td>
              </tr>
              <tr>
                 <td class="facil"><input type="submit" name="buttonCadastrar" id="btnSalvar" value="Cadastrar" ></td>
                 <td><input type="reset" name="Reset" id="Reset" value="Repor"></td>
              </tr>
              <tr>
                <td>Se já se cadastro,faça <a href="../Login/Login.php">Login</a></td>
              </tr>
            </table>
        </form>
      </main>
      <footer><p>Desenvolvido Pelo Segundo Grupo</p></footer>


<!--CADASTRAR -->

<?php
include('../conexao.php');

  if(isset($_POST['buttonCadastrar'])){

   
	  $nome = $_POST['txtnome'];
    $apelido = $_POST['txtapelido'];
    $genero = $_POST['txtgenero'];
	  $endereco = $_POST['txtendereco'];
	  $telefone = $_POST['txttelefone'];
	  $email = $_POST['txtemail'];
    $idade = $_POST['txtidade'];
    $senha = $_POST['txtsenha'];
 


    //VEERIFICAR SE O BI JA ESTA CADASTRADO

    $queryVerifica = "select * from usuarios where email = '$email'";

    $resultVerifica = mysqli_query($conexao,$queryVerifica);

    $rowVerifica = mysqli_num_rows($resultVerifica);

    if($rowVerifica > 0){
      echo"<script language='javascript'>window.alert('Já existe um usuario cadastrado com este email. Tente com outro.'); </script>";
      exit();
    }


    $query = "INSERT INTO `usuarios`(`nome`, `apelido`, `endereco`, `telefone`, `idade`, `email`, `senha`, `nivel`, `licenca`, `sexo`, `ficha_licenca`) 
			VALUES ('$nome','$apelido','$endereco','$telefone','$idade','$email','$senha','usuario','','$genero','')";
 
    $result =   mysqli_query($conexao, $query);
    
    if($result == ''){
      echo"<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar'); </script>";
      
    }else{
      echo"<script language='javascript'>window.alert('Salvo com Sucesso'); </script>";
      echo"<script language='javascript'>window.location='../Login/Login.php'; </script>";
    }

  }
?>
      
      <script>

        let nome=document.querySelector('#Nome')

        let Email=document.queryselector('#Email')

        let Senha=document.querySelector('#Senha')

        function cadastrar(){
         
        }
      </script>
</body>




</html>