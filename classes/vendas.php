<?php
require_once 'conexao.php';
class vendas {
    public $CLIENTE; 
    public $USUARIO; 
    public $QUANTIDADE; 
    public $VALOR_UNITARIO; 
    public $VENDAS_NUMERO;
    public $PRODUTO_CODIGO;
    public $NOME;
    public $VALOR;
    public $DATA_VENDA;
    public $DATA_ENTRREGA;


    public function listarTodos() {
        try {
            $bd =  new Conexao();
    
            $sql ="select * from vendas";
            return $bd -> executeSelect($sql);
           
    
            }catch(PDOException $msg){
            echo "Não  foi  possivel listar  os dados dos vendas {$msg->getMessage()} ";
            }
        }


    
    public function inserir() {
        try {
            if(isset($_POST["salvar"])){
                
                //preencher os campos
               
                $this->USUARIO = $_POST["usuario"];
                $this->QUANTIDADE = $_POST["quantidade"];
                $this->VALOR_UNITARIO = $_POST["valor_unitario"];
                $this->VENDAS_NUMERO = $_POST["vendas_numero"];
                $this->PRODUTO_CODIGO = $_POST["produto_codigo"];
                $this->NOME = $_POST["nome"];
                $this->VALOR = $_POST["valor"];
                $this->DATA_VENDA = $_POST["data_venda"];
                $this->DATA_ENTREGA = $_POST["data_entrega"];




                
            }

            $bd = new conexao();
            $comandoInsert = "insert into vendas(cliente, usuario, quantidade, valor unitario, vendas numero, produto codigo,
            nome, valor, data venda, data entrega)
            values ('{$this->CLIENTE}', '{$this->USUARIO}', '{$this->QUANTIDADE}', '{$this->VALOR_UNITARIO}',
           '{$this->VENDAS_NUMERO}', '{$this->PRODUTO_CODIGO}', 
           '{$this->NOME}' , '{$this->VALOR}','{$this->DATA_VENDA}', '{$this->DATA_ENTREGA}')";

            return $bd->executeQuery($comandoInsert);
        }
        catch(PDOException $msg){
            echo "Não foi possível inserir os dados das Vendas".$msg->getMessage();
        }
    }
    public function selecionar($vendas) {
        try {
            $bd =  new Conexao();
    
            $sql ="select * from produtos where vendas = '$vendas'";
            return $bd -> executeSelect($sql)[0];
           
    
            }catch(PDOException $msg){
            echo "Não  foi  possivel listar  os dados dos venda {$msg->getMessage()} ";
            }
        }

        public function alterar() {
            try {
                if(isset($_POST["salvar"])){
    
                    //preencher os campos
                $this->CLIENTE = $_POST["cliente"];
                $this->USUARIO = $_POST["usuario"];
                $this->QUANTIDADE = $_POST["quantidade"];
                $this->VALOR_UNITARIO = $_POST["valor unitario"];
                $this->VENDAS_NUMERO = $_POST["vendas numero"];
                $this->PRODUTO_CODIGO = $_POST["produto codigo"];
                $this->NOME = $_POST["nome"];
                $this->VALOR = $_POST["valor"];
                $this->DATA_VENDA = $_POST["data venda"];
                $this->DATA_ENTREGA = $_POST["data entrega"];
    
                }
    
                $bd = new conexao();
                $query = "update vendas set 
                 cliente = '$this->CLIENTE',
                 quantidade = '$this->QUANTIDADE',
                 valor unitario = '$this->VALOR_UNITARIO',
                 vendas numero = '$this->VENDAS_NUMERO',
                 produto codigo = '$this->PRODUTO_CODIGO',
                 nome = '$this->NOME',
                 valor = '$this->VALOR',
                 data venda = '$this->DATA_VENDA',
                 data entrega = '$this->DATA_ENTREGA',
                
                
                
                where usuario = '$this->USUARIO' ";
    
                return $bd->executeQuery($query);
            }
            catch(PDOException $msg){
                echo "Não foi possível editar os dados de vendas".$msg->getMessage();
            }
        }

        public function excluir($id){
            $bd = new conexao();
            $query = "delete from vendas where codigo = '$usuarios'";
            return $bd->executeQuery($query);
        }
}