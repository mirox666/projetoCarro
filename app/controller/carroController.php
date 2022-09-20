<?php
session_start();
require_once ("../modal/veiculoDAO.php");
require_once ("../Carros/carros.php");

$meuCarro = new Carro();
$meuCarroDAO = new VeiculoDAO();




    $_SESSION["mensagem"] = $meuCarro->inicio($_POST,$_FILES['foto']);
        if($_SESSION["mensagem"]["status"]){
            $meuCarroDAO->inserir($meuCarro);
            header("Location:../view/visualizarCarro.php");
            die();
           } 
        else{
            header("Location:../view/cadastroCarro.php"); 
        }
       
    if($vari -> validaData($data)){
        header("Location:../view/visualizarCarro.php");
            die();

    }
    else(
        header("Location:../view/cadastroCarro.php"); 
    die();
    )
