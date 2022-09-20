<?php
require_once ("../Carros/carros.php");
require_once ("conexao.php");

class VeiculoDAO{
    private $tabela = "veiculo";

    public function  inserir(Carro $carro){
        $sql = "INSERT INTO {$this->tabela} VALUES(NULL,:marca,:modelo,:anoFabricacao,:locacao,:fimLocacao,:foto)"; 
        $preparacao = Conexao::getConexao()->prepare($sql);

        $preparacao->bindValue(":marca",$carro->marca);
        $preparacao->bindValue(":modelo",$carro->modelo);
        $preparacao->bindValue(":anoFabricacao",$carro->anoFabricacao);
        $preparacao->bindValue(":locacao",$carro->inicioLocacao);
        $preparacao->bindValue(":fimLocacao",$carro->fimLocacao);
        $preparacao->bindValue(":foto",$carro->foto);

        $preparacao->execute();
    
        
        if($preparacao->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }  
    public function consultar($dataBr = false){
        $sql = "SELECT * FROM {$this->tabela}";
        $preparacao = Conexao::getConexao()->prepare($sql);

        $preparacao->execute();

        if($preparacao->rowCount() > 0){
            $resultado =  $preparacao->fetchALL(PDO::FETCH_ASSOC);// o método fecthALL() retorna todos os registros do banco de dados e o valor PDO::FETCH_ASSOC, faz a associação do nome dos campos da tabela com os indices do vetor.
                
           return $resultado;
        }
        else{
            return false;
        }
    }
}
