<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/produtos.php";
$Produto = new produtos();
$listarProdutos = $Produto->listarTodos();

if(isset($_GET["id"])){
    $Produto->excluir($_GET["id"]);
    header("location: listar.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        table,  td, th{
            border: 1px solid black;
            padding: 8px;
        }
        </style>
</head>
<body>
<div class="container al">
    <div class="row">
        <div class="col-md-10">
            <div class="al">
            <h3>Lista de Produtos</h3>
            </div>
        </div>
        <div  class="col-md-2">
            <a href="cadastrarproduto.php" class="btn btn-info">Novo</a>
        </div>
    </div>
    <table class="table table-striped table-white">
        <thead>
   <tr>
                      <th>NOME</th>
                      <th>TAMANHO</th>
                      <th>QUANTIDADE</th>
                      <th>DESCRIÇÃO</th>
                      <th>PREÇO</th>
                      <th>AÇÕES</th>
                    
                  </tr>
               </thead>
               <tbody>

               <?php  if($listarProdutos):foreach ($listarProdutos as $Produtos): ?>
            <tr>
                <td><?php echo $Produtos->nome; ?></td>
                <td><?php echo $Produtos->tamanho; ?></td>
                <td><?php echo $Produtos->quantidade; ?></td>
                <td><?php echo $Produtos->descricao; ?></td>
                <td><?php echo $Produtos->preco; ?></td>
        
                <td>
               <a href="editar.php?id=<?php echo $Produtos -> codigo;?>">EDITAR</a>
               <a href="?id=<?php echo $Produtos -> codigo;?>">EXCLUIR</a>
                </td>

            </tr>
        <?php endforeach; ?>
        <?php else :  ?>
            
        <?php endif ?>

        </tbody>





    </table>

</body>
</html