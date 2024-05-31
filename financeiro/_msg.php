<?php

if (isset($_GET['ret'])) {
    $ret = $_GET['ret'];
}


if (isset($ret)) {

    switch ($ret) {
        case -10:
            echo '<div class="alert alert-danger">
               Data final não pode ser menor que Data inicial.
            </div>';
            break;
        case -9:
            echo '<div class="alert alert-danger">
               Campo Telefone pode ser preenchido somente com números.
            </div>';
            break;
        case -8:
            echo '<div class="alert alert-danger">
               Usuário não encontrado.
            </div>';
            break;
        case -7:
            echo '<div class="alert alert-danger">
               E-mail já cadastrado. Coloque outro E-mail!
            </div>';
            break;
        case -6:
            echo '<div class="alert alert-danger">
                Não foi possível excluir o registro, pois o mesmo pode estar em uso.
            </div>';
            break;
        case -5:
            echo '<div class="alert alert-danger">
                Digite um E-mail válido.
            </div>';
            break;
        case -4:
            echo '<div class="alert alert-danger">
                A Senha e Repetir Senha deverão ser iguais.
            </div>';
            break;
        case -3:
            echo '<div class="alert alert-danger">
                A Senha deverá conter no mínimo 6 caracteres.
            </div>';
            break;
        case -2:
            echo '<div class="alert alert-danger">
            O Nome deverá conter no mínimo 3 caracteres.
                </div>';
            break;
        case 0:
            echo '<div class="alert alert-danger">
                Preencher o(s) campo(s) obrigatório(s). 
            </div>';
            break;
        case 1:
            echo '<div class="alert alert-success">
                Ação realizada com sucesso.
             </div>';
            break;
        case -1:
            echo '<div class="alert alert-danger">
                Ocorreu um erro na operação. Tente mais tarde!
            </div>';
            break;
    }
}
