<?php
require_once 'conexao.php';
class produtos {
    public $CODIGO;
    public $NOME; 
    public $TAMANHO; 
    public $QUANTIDADE; 
    public $DESCRICAO; 
    public $PRECO;

    public function listarTodos() {
        try {
            $bd =  new Conexao();
    
            $sql ="select * from produtos";
            return $bd -> executeSelect($sql);
           
    
            }catch(PDOException $msg){
            echo "Não  foi  possivel listar  os dados dos produtos {$msg->getMessage()} ";
            }
        }
        public function inserir() {
            try {
                if(isset($_POST["salvar"])){
    
                    //preencher os campos
                    $this->NOME = $_POST["nome"];
                    $this->TAMANHO = $_POST["tamanho"];
                    $this->QUANTIDADE = $_POST["quantidade"];
                    $this->DESCRICAO = $_POST["descricao"];
                    $this->PRECO = $_POST["preco"];
    
                }
    
                $bd = new conexao();
                $comandoInsert = "insert into produtos(nome, tamanho, quantidade, descricao, preco)
                values ('{$this->NOME}', '{$this->TAMANHO}', '{$this->QUANTIDADE}', '{$this->DESCRICAO}',
               '{$this->PRECO}')";
    
                return $bd->executeQuery($comandoInsert);
            }
            catch(PDOException $msg){
                echo "Não foi possível inserir os dados do Produto".$msg->getMessage();
            }
        }
        public function selecionar($id) {
            try {
                $bd =  new Conexao();
        
                $sql ="select * from produtos where codigo = '$id'";
                return $bd -> executeSelect($sql)[0];
               
        
                }catch(PDOException $msg){
                echo "Não  foi  possivel listar  os dados dos produtos {$msg->getMessage()} ";
                }
            }

            public function alterar() {
                try {
                    if(isset($_POST["salvar"])){
        
                        //preencher os campos
                        $this->CODIGO = $_POST["codigo"];
                        $this->NOME = $_POST["nome"];
                        $this->TAMANHO = $_POST["tamanho"];
                        $this->QUANTIDADE = $_POST["quantidade"];
                        $this->DESCRICAO = $_POST["descricao"];
                        $this->PRECO = $_POST["preco"];
        
                    }
        
                    $bd = new conexao();
                    $query = "update produtos set 
                    nome = '$this->NOME',
                     tamanho = '$this->TAMANHO',
                     quantidade = '$this->QUANTIDADE',
                     descricao = '$this->DESCRICAO',
                     preco = '$this->PRECO'
                    
                    where codigo = '$this->CODIGO' ";
        
                    return $bd->executeQuery($query);
                }
                catch(PDOException $msg){
                    echo "Não foi possível editar os dados do Produto".$msg->getMessage();
                }
            }

            public function excluir($id){
                $bd = new conexao();
                $query = "delete from produtos where codigo = '$id'";
                return $bd->executeQuery($query);
            }
    }


       




?>