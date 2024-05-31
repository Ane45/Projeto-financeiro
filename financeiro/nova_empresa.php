<?php

require_once '../dao/utildao.php';
UtilDao::VerificarLogado();
require_once '../dao/empresadao.php';

if (isset($_POST['btnGravar'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $objdao = new EmpresaDao();

    $ret = $objdao->CadastrarEmpresa($nome, $telefone, $endereco);
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

                        <h2>Nova Empresa</h2>
                        <h5>Aqui você poderá cadastrar todas as suas empresas. </h5>
                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />

                <form action="nova_empresa.php" method="post">
                    <div class="form-group" id="divempresa">
                        <label>Nome da Empresa*</label>
                        <input class="form-control" name="nome" placeholder="Digite o nome da empresa" id="nomeempresa" maxlength="50" />
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" name="telefone" placeholder="Digite o telefone da empresa (Opcional)" maxlength="11" />
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" name="endereco" placeholder="Digite o endereço da empresa (Opcional)" maxlength="100" />
                    </div>
                    <button type="submit" onclick="return ValidarEmpresa()" name="btnGravar" class="btn btn-success">Gravar</button>
            </div>
            </form>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>