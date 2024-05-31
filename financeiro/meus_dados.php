<?php

require_once '../dao/utildao.php';
UtilDao::VerificarLogado();
require_once '../dao/usuariodao.php';

$objdao = new UsuarioDao();

if (isset($_POST['btnGravar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $ret = $objdao->GravarMeusDados($nome, $email);
}

$dados = $objdao->CarregarMeusDados();

//echo '<pre>';
//print_r($dados);
//echo '</pre>';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php';
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

                        <h2>Meus dados</h2>
                        <h5>Nesta página, você poderá alterar seus dados.<h5>
                    </div>
                </div>

                <!-- /. ROW  -->
                <hr />

                <form action="meus_dados.php" method="post">
                    <div class="form-group" id="divnome">
                        <label>Nome*</label>
                        <input class="form-control" placeholder="Digite seu nome" name="nome" id="nome" value="<?= $dados[0]['nome_usuario'] ?>" maxlength="50" />
                    </div>
                    <div class="form-group" id="divemail">
                        <label>E-mail*</label>
                        <input class="form-control" placeholder="Digite seu e-mail" name="email" id="email" value="<?= $dados[0]['email_usuario'] ?>" maxlength="50"/>
                    </div>
                    <button type="submit" onclick="return ValidarMeusDados()" class="btn btn-success" name="btnGravar">Gravar</button>
                </form>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>


</html>