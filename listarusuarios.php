<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/usuarios.php";
$Usuarios = new usuarios();
$listarUsuarios = $Usuarios->listarTodos();


if(isset($_GET["id"])){
    $Usuarios->excluir($_GET["id"]);
    header("location: listarusuarios.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuarios</title>
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
            <h3>Lista de Usuarios</h3>
            </div>
        </div>
        <div  class="col-md-2">
            <a href="cadastrarusuario.php" class="btn btn-info">Novo</a>
        </div>
    </div>
    <table class="table table-striped table-white">
        <thead>
   <tr>
                      <th>EMAIL</th>
                      <th>SENHA</th>
                      <th>NOME</th>
                      <th>CPF</th>
                      <th>TIPO</th>
                      <th>CIDADE</th>
                      <th>ESTADO</th>
                      <th>BAIRRO</th>
                      <th>RUA</th>
                      <th>NUMERO</th>
                      <th>CEP</th>
                    
                  </tr>
               </thead>
               <tbody>

               <?php  if($listarUsuarios):foreach ($listarUsuarios as $Usuarios): ?>
            <tr>
                <td><?php echo $Usuarios->email; ?></td>
                <td><?php echo $Usuarios->senha; ?></td>
                <td><?php echo $Usuarios->nome; ?></td>
                <td><?php echo $Usuarios->cpf; ?></td>
                <td><?php echo $Usuarios->tipo; ?></td>
                <td><?php echo $Usuarios->cidade; ?></td>
                <td><?php echo $Usuarios->estado; ?></td>
                <td><?php echo $Usuarios->bairro; ?></td>
                <td><?php echo $Usuarios->rua; ?></td>
                <td><?php echo $Usuarios->numero; ?></td>
                <td><?php echo $Usuarios->cep; ?></td>
        
                <td>
               <a href="editarusuarios.php?id=<?php echo $Usuarios -> codigo;?>">EDITAR</a>
               <a href="?id=<?php echo $Usuarios -> codigo;?>">EXCLUIR</a>
                </td>

            </tr>
        <?php endforeach; ?>
        <?php else :  ?>
            
        <?php endif ?>

        </tbody>





    </table>

</body>
</html