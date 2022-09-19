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
        $preparacao->bindValue(":anofabricacao",$carro->anoFabricacao);
        $preparacao->bindValue(":locacao",$carro->inicioLocacao);
        $preparacao->bindValue(":fimLocacao",$carro->fimLocacao);
        $preparacao->bindValue(":foto",$carro->foto);
    }   
}
