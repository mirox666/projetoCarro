<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>AutoCars</title>
</head>
<body id="bg">
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-text-white-50 bg-dark">
            <div class="container-fluid">
                
                <a href="#" class="navbar-brand fs-3 fw-bold logoCarro">
                    <img src="../img/Free_Sample_By_Wix (1).jpg" alt="Logo"  class="logoImagem">
                </a>
                

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../view/visualizarCarro.php" class="nav-link text-white fs-5">Carros</a>
                        </li>
                        <li class="nav-item">
                            <a href="../view/cadastroCarro.php" class="nav-link text-white fs-5">Cadastrar</a>
                        </li>
                    </ul>

                </div>
            
            </div>                       
        </nav>
    </header>
