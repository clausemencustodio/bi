<?php
include('conexao.php');

$user = $_SESSION['nome_usuario'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
    <title>Biblioteca Municipal</title>
    <style>
     @font-face {
        font-family: 'myfirst';
            src: url('../Fontes/Work_Sans/WorkSans-VariableFont_wght.ttf');
    }
    *{
        margin: 0px;
        padding: 0%;
        font-family: 'myfirst';
      
    }
    
    :root{
      --cor0:#F1CF1E;
      --cor1:#A8A7A7;
      --cor2:#23A0D8;
      --cor3:#E8F6FF;
     } 
    #fora{
        position: relative;
        background-color: #A8A7A7;
     
        display: inline-block;
       left: 10px;
        top: 10px;
        padding: 10px;
        border-radius: 5px;
        box-sizing: border-box;
        
    }
    #dentro{
        text-align: center;
        
        
        
    }
    a{
        color: white;
        text-decoration: none;
    }
    #fora:hover{
        background-color: var(--cor2);
        border: 1px solid #F1CF1E;
        transition-duration: 0.5s;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.192);
    }
       
       
    body{
        background-color: var(--cor2);
     
        background-attachment: fixed;
        color: white;
        background-position: center center;
     
        background-size: cover;
        max-width: 1350px;
        min-width: 320px;
        
    } 
    main{
        background-color: rgba(255, 255, 255, 0.808);
        color: black;
        width: 100%;
       
        font-family: Arial, Helvetica, sans-serif;
        max-width: 1350px;
        min-width: 320px;
       
    }
  
    header{
       background-color: var(--cor2);
      padding-top: 20px;
      width: 100%;
      height: 100%;
      text-align: center;
      max-width: 1350px;
        min-width: 320px;
     

    }
    nav{
      background-image: linear-gradient(to right,var(--cor2), gray,var(--cor3));
      padding-bottom: 10px;
      width: 100%;
      height: 100%;
      text-align: center; 
      max-width: 1350px;
        min-width: 320px;  

    }
    nav>a{
        padding:20px;
        color: #E8F6FF;
        text-decoration: none;
       
    }
    nav>a:hover{
        border: 1px solid white;
        padding: 5px;
        padding-top:0.5px ;
        transition-duration: 1s; 
        background-color: var(--cor2);
        border-radius: 5px;
        box-shadow: 2px 2px 2px black;
         border-color: var(--cor0);
     
    }
    nav>a:active{
        color: var(--cor0);
    }
   
    input#botão{
        border-radius: 100px;
        background-color: var(--cor3);
       
        box-sizing: border-box;
        
        
    }
    input#botão:hover{
        transition-duration: 1s;
        box-shadow: 2px 2px 2px black; 
        background-color:var(--cor2);
    }
   
    section{
        padding-top:10vh ;
        padding-bottom: 10vh;
        line-height: 2em;
    
        font-family: var(--font3);
        max-width: 1350px;
        min-width: 320px;
      
    }
    section.endereço{
        background-color: rgba(0, 0, 0, 0.842);
        color:black;
        box-shadow: inset 6px  6px 13px 0px rgba(0, 0, 0, 0.493);
        background-size: cover;
        background-attachment: fixed;
    
    
    }
    section.endereço>article{
      background-image:linear-gradient(to right,var(--cor2), gray,var(--cor3));
      display: inline-block;
      border-radius: 3px;
      position: relative;
      margin: auto;
    }
    section#nobody{
        background-image: url('Imagens/Beira_center_2000.jpg'); 
       
       display: inline-block;
        width: 100%;
      
       background-position: right center;
       margin: 0%;
    
       
    }
    .img{
       display: block;
        margin-right: auto;
        max-width: 1350px;
        min-width: 320px;
    }
    footer{
        background-color: var(--cor3);
        color: black;
        text-align: center;
       margin:auto ;
        width: 100%;   
        max-width: 1350px;
        min-width: 320px;
    }
    </style>
</head>
<body>
    <a href="Login/Login.php">
        <div id="fora">
            <div id="dentro">Login</div>
        </div>
    </a>
    
    <header>
        
       <h1>Bem-vindo a Biblioteca Municipal <?php echo $_SESSION['nome_usuario'] ?></h1>
   </header>
   
    <nav>
    <a href="../biblioteca/Romance antes do login/index.html">Livros</a>
    <a href="tel:+258852419412">Contacte-nos</a>
    </nav>

   <main>
       <section class="ib" id="Info da biblioteca">
           <article>
               <p>
                   Bem vindo ao site da biblioteca municipal da cidade de Wing ridden 
                   os livros disponiveis para requesitar são os <strong>livros de acção</strong> e <strong>livro de romance</strong>
                   
               </p>
           </article>
       </section>
       <section class="endereço" id="nobody">
           <article>
               <p> 
                   A Biblioteca publica ,localiza-se na baixa da cidade <br>
                   ao pé do Banco de Moçambique e do Banco Standar Bank <br>
                   com uma variedade grande de livros foi inaugurada no ano <br>
                   de 1777 ,tendo como proprietario O Edil da cidade <br>
                   <Exmo class="sr">Clausemen Custodio Nanro</Exmo> na sua inauguração reunio <br>
                   varias figuras publicas como Mark exodus, Mr.bow, Ziqo <br>
                   Nacionais, e internacionais como O Nga, Prodigio , <br>
                   deezy, T-rex , e no seu primeiro dia de vendas fez sucesso <br>
                   ultrapassando a marca de 100 livros requesitados <br>
               </p>
           </article>

       </section>
               
   </main>
   <footer>Site desenvolvido pelo Segundo Grupo</footer>
</body>
</html>