<?php
require_once 'conexao.php';
class usuarios {
    public $EMAIL; 
    public $SENHA; 
    public $NOME; 
    public $CPF; 
    public $TIPO; 
    public $CIDADE; 
    public $ESTADO; 
    public $BAIRRO; 
    public $RUA; 
    public $NUMERO; 
    public $CEP; 

    public function listarTodos() {
        try {
            $bd =  new Conexao();
    
            $sql ="select * from usuarios";
            return $bd -> executeSelect($sql);
           
    
            }catch(PDOException $msg){
            echo "Não  foi  possivel listar  os dados dos usuarios {$msg->getMessage()} ";
            }
        }
    public function inserir() {
        try {
            if(isset($_POST["salvar"])){
                
                //preencher os campos
                $this->EMAIL = $_POST["email"];
                $this->SENHA = $_POST["senha"];
                $this->NOME = $_POST["nome"];
                $this->CPF = $_POST["cpf"];
                $this->TIPO = $_POST["tipo"];
                $this->CIDADE = $_POST["cidade"];
                $this->ESTADO = $_POST["estado"];
                $this->BAIRRO = $_POST["bairro"];
                $this->RUA = $_POST["rua"];
                $this->CEP = $_POST["cep"];
            }

            $bd = new conexao();
            $comandoInsert = "insert into usuarios(email, senha, nome, cpf, tipo, cidade, estado, bairro, rua, cep)
            values ('{$this->EMAIL}', '{$this->SENHA}', '{$this->NOME}', '{$this->CPF}', '{$this->TIPO}',
           '{$this->CIDADE}', '{$this->ESTADO}', '{$this->BAIRRO}', '{$this->RUA}', '{$this->CEP}'  )";

            return $bd->executeQuery($comandoInsert);
        }
        catch(PDOException $msg){
            echo "Não foi possível inserir os dados dos Usuarios".$msg->getMessage();
        }
    }
   

        public function alterar() {
            try {
                if(isset($_POST["salvar"])){
    
                    //preencher os campos
                    $this->CODIGO = $_POST["codigo"];
                    $this->EMAIL = $_POST["email"];
                    $this->SENHA = $_POST["senha"];
                    $this->NOME = $_POST["nome"];
                    $this->CPF = $_POST["cpf"];
                    $this->TIPO = $_POST["tipo"];
                    $this->CIDADE = $_POST["cidade"];
                    $this->ESTADO = $_POST["estado"];
                    $this->BAIRRO = $_POST["bairro"];
                    $this->RUA = $_POST["rua"];
                    $this->CEP = $_POST["cep"];
    
                }
    
                $bd = new conexao();
                $query = "update usuarios set 
                email= '$this->EMAIL',
                senha = '$this->SENHA',
                nome = '$this->NOME',
                cpf = '$this->CPF',
                tipo = '$this->TIPO',
                cidade = '$this->CIDADE',
                estado = '$this->ESTADO',
                bairro = '$this->BAIRRO',
                rua = '$this->RUA',
                cep = '$this->CEP'

                
                where codigo = '$this->CODIGO' ";
    
                 $bd->executeQuery($query);
            }
            catch(PDOException $msg){
                echo "Não foi possível editar os dados do Usuario".$msg->getMessage();
            }
        }

        public function excluir($id){
            $bd = new conexao();
            $query = "delete from usuarios where codigo = '$id'";
            return $bd->executeQuery($query);
        }
        public function selecionar($id) {
            try {
                $bd =  new Conexao();
        
                $sql ="select * from usuarios where codigo = '$id'";
                return $bd -> executeSelect($sql)[0];
               
        
                }catch(PDOException $msg){
                echo "Não  foi  possivel listar  os dados dos produtos {$msg->getMessage()} ";
                }
            }
}






?>