<?php

require_once '../dao/usuariodao.php';

if (isset($_POST['btnAcessar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $objdao = new UsuarioDao();

    $ret = $objdao->ValidarLogin($email, $senha);
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">

                

                <br /><br />
                <?php include_once '_msg.php'; ?>
                <h2> Controle Financeiro : ACESSO</h2>

                <h5>( Faça seu login )</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Entre com seus dados </strong>
                    </div>
                    <div class="panel-body">

                        <form role="form" action="login.php" method="post">
                            <br />
                            <div class="form-group input-group" id="divemail">
                            <span class="input-group-addon">@</span>
                                <input type="text" name="email" class="form-control" placeholder="Seu e-mail " id="email"/>
                            </div>
                            <div class="form-group input-group" id="divsenha">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="senha" class="form-control" placeholder="Sua senha" id="senha"/>
                            </div>


                            <button name="btnAcessar" onclick=" return ValidarLogin()" class="btn btn-primary ">Acessar</button>
                            <hr />
                            Caso não tenha cadastro, <a href="cadastro.php">Clique aqui! </a>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>

</body>

</html>