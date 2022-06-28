<?php
include("../php/config.php");

if(isset($_POST["email"]) && isset($_POST["password"])){
    $sql = $db->prepare("select * from usuarios where email=? and senha=?");
    $sql->execute([$_POST["email"], $_POST["senha"]]);
    if($sql->rowCount() > 0){
       header("location:logado.php");
    }else{
      header("location:index.php");
    }

}else{
   header("location:index.php");
}


?>