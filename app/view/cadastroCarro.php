<?php
    include_once ("../includes/cabecalho.php");
        //isset verifica se alguma variável existe
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
            unset($_SESSION["mensagem"]); // Destruindo a variável de sessão
        ?>
    <main class="container-fluid mt-5">
        <h1 class="text-center fw-bold corTitulo" >Faça o cadastro do seu veículo</h1>
        <hr>
        <form action="../controller/carroController.php" class="mt-5" method="POST" enctype="multipart/form-data">
            <section class="container col-md-6">
                <div class="col-md-12 mb-3">
                    <label for="nomeCarro" class="form-label fw-bold text-light">
                        Nome do carro <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="nomeCarro" id="nomeCarro" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="marcaCarro" class="form-label fw-bold text-light">
                        Marca <span class="text-danger">*</span> 
                    </label>
                    <input type="text" name="marcaCarro" id="marcaCarro" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="dataFabricacao" class="form-label fw-bold text-light">
                        Ano de fabricação <span class="text-danger">*</span>
                    </label>
                    <input type="number" name="dataFabricacao" id="dataFabricacao" class="form-control">
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="dataLocacao" class="form-label fw-bold text-light">
                        Data da locação <span class="text-danger">*</span>
                    </label>
                    <input type="date" name="dataLocacao" id="dataLocacao" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="dataDevolucao" class="form-label fw-bold text-light">
                        Data da devolução <span class="text-danger">*</span>
                    </label>
                    <input type="date" name="dataDevolucao" id="dataDevolucao" class="form-control">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="foto" class="form-label fw-bold text-light">
                        Banner do Carro <span class="text-danger">*</span>
                    </label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="imagens/*">
                </div>
                <input type="hidden" name="Cadastrar">
                
                <button type="submit"  class="btn btn-primary my-3 col-12 text-white">Cadastrar</button>
              
            </section>
        </form>
    </main>