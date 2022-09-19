<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
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
                            <a href="" class="nav-link text-white fs-5">Carros</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link text-white fs-5">Logout</a>
                        </li>
                    </ul>

                </div>
            
            </div>                       
        </nav>
    </header>

    <main class="container-fluid mt-5">
        <h1 class="text-center fw-bold corTitulo" >Faça o cadastro do seu veículo</h1>
        <hr>
        <form action="../Carros/carros.php" class="mt-5" method="POST">
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
                    <label for="banner" class="form-label fw-bold text-light">
                        Banner do Carro <span class="text-danger">*</span>
                    </label>
                    <input type="file" name="banner" id="banner" class="form-control" accept="imagens/*">
                </div>

                <button type="submit" class="btn btn-primary my-3 col-12 text-white">Cadastrar</button>
              
            </section>
        </form>
    </main>

</body>
</html>