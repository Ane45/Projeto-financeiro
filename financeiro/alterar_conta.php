<?php

require_once '../dao/contadao.php';

$objdao = new ContaDao();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

    $idConta = $_GET['cod'];

    $dados = $objdao->DetalharConta($idConta);

    if (count($dados) == 0) {
        header('location: consultar_conta.php');
        exit;
    }
} else if (isset($_POST['btnSalvar'])) {

    $idConta = $_POST['cod'];
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $numero = $_POST['numero'];
    $saldo = $_POST['saldo'];

    $ret = $objdao->AlterarConta($idConta, $banco, $agencia, $numero, $saldo );

    header('location: consultar_conta.php?ret=' . $ret);
    exit;
} else if (isset($_POST['btnExcluir'])) {

    $idConta = $_POST['cod'];
    $ret = $objdao->ExcluirConta($idConta);

    header('location: consultar_conta.php?ret=' . $ret);
    exit;

} else {

    header('location: consultar_conta.php');
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
                        <h2>Alterar Conta</h2>
                        <h5>Aqui você poderá alterar todas as suas contas. </h5>
                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="alterar_conta.php" method="post">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_conta'] ?>">
                <div class="form-group" id="divbanco">
                    <label>Nome do banco*</label>
                    <input class="form-control" placeholder="Digite o nome da banco..." id="banco" name="banco" value="<?= $dados[0]['banco_conta'] ?>" />
                </div>
                <div class="form-group" id="divagencia">
                    <label>Agência*</label>
                    <input class="form-control" placeholder="Digite a agência" id="agencia" name="agencia" value="<?= $dados[0]['agencia_conta'] ?>" />
                </div>
                <div class="form-group" id="divnumero">
                    <label>Número da conta*</label>
                    <input class="form-control" placeholder="Digite o número da conta" id="numero" name="numero" value="<?= $dados[0]['numero_conta'] ?>" />
                </div>
                <div class="form-group" id="divsaldo">
                    <label>Saldo*</label>
                    <input class="form-control" placeholder="Digite o saldo da conta" id="saldo" name="saldo" value="<?= $dados[0]['saldo_conta'] ?>"/>
                </div>
                <button type="submit" class="btn btn-success" onclick=" return ValidarConta()" name="btnSalvar">Salvar</button>
                <button type="button" class="btn btn-danger" name="btnExcluir" data-toggle="modal" data-target="#modalExcluir">Excluir</button>
                    <div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
                                </div>
                                <div class="modal-body">
                                    Deseja excluir a conta: <b><?= $dados[0]['banco_conta'] ?> / Agência: <?= $dados[0]['agencia_conta'] ?> - Número: <?= $dados[0]['numero_conta'] ?> ?</b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="btnExcluir" class="btn btn-primary">Sim</button>
                                </div>
                            </div>
            </div>
             </form>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>