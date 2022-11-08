<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    
<p><a href="adicionar.php">Adicionar novo livro</a></p>


<br>

<p>lista dos livros</p>
<!--LISTAR TODOS OS Clientes-->
<?php

include('../../conexao.php');


$queryTabela = "SELECT * FROM `livro` order by nome asc";

$resultTabela =   mysqli_query($conexao, $queryTabela);
//$dado   =   mysqli_fetch_array($result);
$rowTabela = mysqli_num_rows($resultTabela);
echo"Numero de Registros: $rowTabela";
if($rowTabela == ''){
    echo"<h3>Nao existem dados</h3>";
    
}else{
    ?>

    <table class="table">
    <thead class=" text-primary">
        
        <th>
        Nome
        </th>
        <th>
        Genero
        </th>
        <th>
        Codigo
        </th>
        <th>
        Descricao
        </th>
        <th>
        Data
        </th>
      
    </thead>
    <tbody>
        
        <?php

        while($res_1 = mysqli_fetch_array($resultTabela)){
            $id = $res_1["id"];
            $nome  =  $res_1["nome"];
            $genero  =  $res_1["genero_id"];
            $codigo  =  $res_1["codigo"];
            $descricao  =  $res_1["descricao"];
           
            $data  =  $res_1["data"];
            $data2 = implode('/',array_reverse(explode
            ('-', $data)));

            ?>
            <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $genero; ?></td>
                <td><?php echo $codigo; ?></td>
                <td><?php echo $descricao; ?></td>
               
                <td><?php echo $data2; ?></td>
              
            </tr>
            <?php
                }
            ?>
    </tbody>
    </table>
    <?php
    }
    ?>
</body>
</html>