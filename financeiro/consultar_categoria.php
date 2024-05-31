<?php

require_once '../dao/utildao.php';
UtilDao::VerificarLogado();
require_once '../dao/categoriadao.php';

$nome_pesq = '';
$objdao = new CategoriaDao();

if (isset($_POST['btnPesquisar'])) {
    $nome_pesq = $_POST['nome_pesq'];
    $categorias = $objdao->ConsultarCategoria($nome_pesq);
} else {
    $categorias = $objdao->ConsultarCategoria();
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php'
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php'; ?>
                        <h2>Consultar Categoria</h2>
                        <h5>Consulte todas as suas categorias aqui. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Categorias cadastradas. Caso deseja alterar, clique no botão.
                            </div>

                            <div class="panel-body">
                                <form action="consultar_categoria.php" method="post">
                                    <div class="form-group" id="divnome">
                                        <label>Pesquisar pelo nome: </label>
                                        <input class="form-control" placeholder="Digite o nome aqui..." name="nome_pesq" value="<?= $nome_pesq ?>" />
                                    </div>
                                    <center>
                                        <button name="btnPesquisar" class="btn btn-info btn btn-sm ">Pesquisar</button>
                                    </center>
                                </form>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nome da categoria</th>
                                                <th>Ação</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($categorias as $item) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $item['nome_categoria'] ?></td>
                                                    <td>
                                                        <a href="alterar_categoria.php?cod=<?= $item['id_categoria'] ?>" class="btn btn-warning btn-sm">Alterar</a>
                                                    </td>
                                                <?php } ?>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>