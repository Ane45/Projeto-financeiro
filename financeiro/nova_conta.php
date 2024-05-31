<?php

require_once '../dao/utildao.php';
UtilDao::VerificarLogado();
require_once '../dao/contadao.php';

if (isset($_POST['btnGravar'])) {
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $numero = $_POST['numero'];
    $saldo = $_POST['saldo'];

    $objdao = new ContaDao();

    $ret = $objdao->CadastrarConta($banco, $agencia, $numero, $saldo);
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

                        <h2>Nova Conta</h2>
                        <h5>Aqui você poderá cadastrar todas as suas contas. </h5>
                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />

                <form action="nova_conta.php" method="post">
                    <div class="form-group" id="divbanco">
                        <label>Nome do banco*</label>
                        <input class="form-control" name="banco" placeholder="Digite o nome da banco" id="banco"  maxlength="20"/>
                    </div>
                    <div class="form-group" id="divagencia">
                        <label>Agência*</label>
                        <input class="form-control" name="agencia" placeholder="Digite a agência" id="agencia" maxlength="8" />
                    </div>
                    <div class="form-group" id="divnumero">
                        <label>Número da conta*</label>
                        <input class="form-control" name="numero" placeholder="Digite o número da conta" id="numero" maxlength="12"/>
                    </div>
                    <div class="form-group" id="divsaldo">
                        <label>Saldo*</label>
                        <input class="form-control" name="saldo" placeholder="Digite o saldo da conta" id="saldo" />
                    </div>
                    <button type="submit" name="btnGravar" class="btn btn-success" onclick=" return ValidarConta()">Gravar</button>
            </div>
            </form>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>