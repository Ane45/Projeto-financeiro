<?php

require_once '../dao/utildao.php';
UtilDao::VerificarLogado();
require_once '../dao/categoriadao.php';

if (isset($_POST['btnGravar'])) {
    $nome = $_POST['nome'];

    $objdao = new CategoriaDao();

    $ret = $objdao->CadastrarCategoria($nome);
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

                        <h2>Nova Categoria</h2>
                        <h5>Aqui você poderá cadastrar todas as suas categorias. </h5>
                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />

                <form action="nova_categoria.php" method="post">
                    <div class="form-group" id="divcategoria">
                        <label>Nome da categoria*</label>
                        <input class="form-control" placeholder="Digite o nome da categoria. Exemplo: Conta de luz" name="nome" id="nomecategoria" maxlength="35" />
                    </div>
                    <button type="submit" onclick="return ValidarCategoria()" class="btn btn-success" name="btnGravar">Gravar</button>
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>