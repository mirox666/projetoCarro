
<?php
include ("../includes/cabecalho.php");
?>

<main class="container-fluid">
    <section class="container">
        <section class="col-md-9 mx-auto"> 
            <table class="table table-light " >
        <thead >
            <tr >
             <th scope="col">Foto</th>
             <th scope="col">Marca</th>
             <th scope="col">Modelo</th>
             <th scope="col">Ano de Fabricação</th>
            <th scope="col">Data de Locação</th>
            <th scope="col">Data de Devolução</th>
            <th scope="col">Ações</th>
            </tr>

        </thead>
        <?php
         require_once("../modal/veiculoDAO.php");
         unset($_SESSION['id_veiculo']);
        $veiculo = new veiculoDAO();

         if($veiculo->consultar()):
         foreach($veiculo->consultar() as $elementos):

          ?>
            <tr>
            <th scope"row">
                <img src="<?=$elementos['foto']?>"  style="width:100px; height:100px"> 
            
            </th>
            
            <td><?=$elementos['marca']?></td>
            <td><?=$elementos['modelo']?></td>
            <td><?=$elementos['ano_fabricacao']?></td>
            <td><?=$elementos['locacao_inicio']?></td>
            <td><?=$elementos['locacao_fim']?></td>
            <td>
            <div class="card-footer">
                            <form action="atualizaCarro.php" method="POST" class="d-flex justify-content-around">
                                 <button type="submit" class="btn btn-info col-5 d-flex justify-content-center align-items-center">
                                    Editar <span class="material-symbols-outlined ms-2"></span>
                                </button>
                                <!--o campo hidden irá armazenar, de forma oculta, o id de cada item do banco de dados-->
                                <input type="hidden" name="id_veiculo" value="<?=$elementos['id_veiculo']?>">

                                <button type="button" class="btn btn-danger col-5 d-flex justify-content-center align-items-center excluir" data-bs-toggle="modal" data-bs-target="#modalExcluir" id="<?=$elementos['id_veiculo']?>">
                                    Excluir <span class="material-symbols-outlined ms-2"></span>
                                </button>
                            </form>
            </td>

            <?php
             endforeach;
             endif;
           ?>
            </tr>
           
           
                </tbody>
                
        </table>
    </section>

       
    </section>
    
</main>
<section class="modal fade" id="modalExcluir">
    
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atenção</h5>
                <button class="btn-close" data-bs-dismiss = "modal"></button>
            </div>
            <form action="../controller/carroController.php" method="POST">
                <div class="modal-body">
                    Tem certeza que deseja Excluir esse evento?
                    <input type="hidden" name="excluir" id="excluirCarro">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger" id="confirmar">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
    
    </section>    

<?php
include_once ("../includes/rodape.php");
?>