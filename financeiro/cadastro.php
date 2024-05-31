<?php

require_once '../dao/usuariodao.php';

if (isset($_POST['btnFinalizar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $repetirsenha = $_POST['repetir_senha'];

    $objdao = new UsuarioDao();

    $ret = $objdao->CadastrarUsuario($nome, $email, $senha, $repetirsenha);
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">

                <br /><br />
                 <?php include_once '_msg.php'; ?>
                <h2> Controle Financeiro : Cadastro</h2>

                <h5>( Faça seu cadastro )</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Preencher todos os campos </strong>
                    </div>
                    <div class="panel-body">
                       
                        <form role="form" action="cadastro.php" method="post">
                            <br />

                            <div class="form-group input-group" id="divnome">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="nome" class="form-control" placeholder="Seu nome" id="nome"/>
                            </div>
                            <div class="form-group input-group" id="divemail">
                                <span class="input-group-addon">@</span>
                                <input type="text" name="email" class="form-control" placeholder="Seu e-mail" id="email"/>
                            </div>
                            <div class="form-group input-group" id="divsenha">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="senha" class="form-control" placeholder="Crie uma senha (mínimo 6 caracteres)" id="senha"/>
                            </div>
                            <div class="form-group input-group" id="divrsenha">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="repetir_senha" class="form-control" placeholder="Repita a senha criada" id="rsenha"/>
                            </div>

                            <button name="btnFinalizar" onclick="return ValidarCadastro()" class="btn btn-success ">Finalizar cadastro</button>

                            <hr />
                            Já possui cadastro ? <a href="login.php">Clique aqui</a>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>

</body>

</html>