<?php
session_start();
require_once ("../modal/veiculoDAO.php");
require_once ("../Carros/carros.php");


$meuCarro = new Carro();
$meuCarroDAO = new VeiculoDAO();


 if(isset($_POST['cadastrar'])){ 
    $_SESSION["mensagem"] = $meuCarro->inicio($_POST,$_FILES['foto']);
  

        if($_SESSION["mensagem"]["status"]){
            $meuCarroDAO->inserir($meuCarro);
            header("Location:../view/visualizarCarro.php");
            die();
           }
        else{
            header("Location:../view/cadastroCarro.php"); 
        }
   
    }

 if(isset($_POST['atualizar'])){
        $_SESSION['atualizar'] = $meuCarro->inicio($_POST,$_FILES['foto']);
       
      
        if($_SESSION['atualizar']['status']){ 
        $meuCarroDAO->atualizar($meuCarro, $_POST['atualizar']) ; // estamos passando com parâmetro um objeto Evento e o id do evento que está atribuido $_POST['atualizar']
        
        header("Location:../view/visualizarCarro.php");
        die();
    }
        else{
    
            header("Location:../view/atualizaCarro.php");  
        }
    }

  if(isset($_POST['excluir'])){
    //echo "O id para Excluir é {$_POST['excluir']}";
    $meuCarroDAO->deletar($_POST['excluir']);
    header("Location:../view/visualizarCarro.php");
    die();
    }