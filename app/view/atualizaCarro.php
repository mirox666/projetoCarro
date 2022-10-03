<?php

    include_once ("../includes/cabecalho.php");
    require_once ("../modal/veiculoDAO.php");
   
    if(isset($_SESSION["mensagem"])){
        if($_SESSION["mensagem"]["status"]){
            echo "
                <div class='alert alert-success alert-dismissible fade show'> 
                    <h4 class='text-center'>{$_SESSION['mensagem']['msg']}</h4>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                </div>
            ";
        }
        else{
            echo "
                <div class='alert alert-danger alert-dismissible fade show'> 
                    <h4 class='text-center'>{$_SESSION['mensagem']['msg']}</h4>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                </div>
            ";
        }
    }
    unset($_SESSION["mensagem"]); 

    
    if(!isset($_SESSION['id_veiculo'])){
        $_SESSION['id_veiculo'] = $_POST['id_veiculo'];
    }
    $meuCarroDAO = new veiculoDAO();
    $resultado = $meuCarroDAO->consultarUnico($_SESSION["id_veiculo"]);

    $elemento = $resultado[0];
    
   
    if(isset($_SESSION["atualizar"])){
        if($_SESSION["atualizar"]["status"]){
            echo "
                <div class='alert alert-success alert-dismissible fade show'> 
                    <h4 class='text-center'>{$_SESSION['atualizar']['msg']}</h4>
                    
                </div>
            ";
        }
        else{
            echo "
                <div class='alert alert-danger alert-dismissible fade show'> 
                    <h4 class='text-center'>{$_SESSION['atualizar']['msg']}</h4>
                    
                </div>
            ";
        }
    }
    unset($_SESSION["atualizar"]); 
        ?>
    <main class="container-fluid mt-5">
        <h1 class="text-center fw-bold corTitulo" >Faça a atualização do seu Cadastro</h1>
        <hr>
        <form action="../controller/carroController.php" class="mt-5" method="POST" enctype="multipart/form-data">
            <section class="container col-md-6">
                <div class="col-md-12 mb-3">
                    <label for="nomeCarro" class="form-label fw-bold text-light">
                        Nome do carro <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="nomeCarro" id="nomeCarro" class="form-control"value="<?=$elemento['modelo']?>" >
                </div>

                <div class="col-md-12 mb-3">
                    <label for="marcaCarro" class="form-label fw-bold text-light">
                        Marca <span class="text-danger">*</span> 
                    </label>
                    <input type="text" name="marcaCarro" id="marcaCarro" class="form-control"value="<?=$elemento['marca']?>" >
                </div>

                <div class="col-md-12 mb-3">
                    <label for="dataFabricacao" class="form-label fw-bold text-light">
                        Ano de fabricação <span class="text-danger">*</span>
                    </label>
                    <input type="number" name="dataFabricacao" id="dataFabricacao" class="form-control" value="<?=$elemento['ano_fabricacao']?>">
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="dataLocacao" class="form-label fw-bold text-light">
                        Data da locação <span class="text-danger">*</span>
                    </label>
                    <input type="date" name="dataLocacao" id="dataLocacao" class="form-control"value="<?=$elemento['locacao_inicio']?>" >
                </div>

                <div class="col-md-12 mb-3">
                    <label for="dataDevolucao" class="form-label fw-bold text-light">
                        Data da devolução <span class="text-danger">*</span>
                    </label>
                    <input type="date" name="dataDevolucao" id="dataDevolucao" class="form-control" value="<?=$elemento['locacao_fim']?>">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="foto" class="form-label fw-bold text-light">
                        Banner do Carro <span class="text-danger">*</span>
                    </label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="imagens/*" value="<?=$elemento['foto']?>">
                </div>
                <input type="hidden" name="atualizar" value="<?=$elemento['id_veiculo']?>">
                
                <button type="submit"  class="btn btn-primary my-3 col-12 text-white">Atualizar</button>
              
            </section>
        </form>
    </main>