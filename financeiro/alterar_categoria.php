<?php

require_once '../dao/categoriadao.php';

$objdao = new CategoriaDao();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $idCategoria = $_GET['cod'];

    $dados = $objdao->DetalharCategoria($idCategoria);

    // Verificar se tem alguma coisa dentro do array $dados
    if (count($dados) == 0) {
        header('location: consultar_categoria.php');
        exit;
    }
} else if (isset($_POST['btnSalvar'])) {

    $idCategoria = $_POST['cod'];
    $nomecategoria = $_POST['nomecategoria'];

    $ret = $objdao->AlterarCategoria($nomecategoria, $idCategoria);

    header('location: consultar_categoria.php?ret=' . $ret);
} else if (isset($_POST['btnExcluir'])) {

    $idCategoria = $_POST['cod'];
    $ret = $objdao->ExcluirCategoria($idCategoria);

    header('location: consultar_categoria.php?ret=' . $ret);
} else {

    header('location: consultar_categoria.php');
    exit;
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
                        <h2>Alterar Categoria</h2>
                        <h5>Aqui você poderá alterar ou excluir todas as suas categorias. </h5>
                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_categoria.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_categoria'] ?>">
                    <div class="form-group" id="divcategoria">
                        <label>Nome da categoria*</label>
                        <input class="form-control" id="nomecategoria" placeholder="Digite o nome da categoria. Exemplo: Conta de luz" name="nomecategoria" value="<?= $dados[0]['nome_categoria'] ?>" maxlength="35" />
                    </div>
                    <button type="submit" onclick="return ValidarCategoria()" class="btn btn-success" name="btnSalvar">Salvar</button>
                    <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalExcluir">Excluir</button>
                   
                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir a categoria: <b><?= $dados[0]['nome_categoria'] ?> ?</b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="btnExcluir" class="btn btn-primary">Sim</button>
                                </div>
                            </div>
                </form>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>


</body>

</html>