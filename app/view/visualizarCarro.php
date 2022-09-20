
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
            <td></td>

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

<?php
include ("../includes/rodape.php");
?>