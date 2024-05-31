<?php

require_once '../dao/utildao.php';
UtilDao::VerificarLogado();
require_once '../dao/movimentodao.php';
require_once '../dao/categoriadao.php';
require_once '../dao/empresadao.php';
require_once '../dao/contadao.php';

$dao_cat = new CategoriaDao();
$dao_emp = new EmpresaDao();
$dao_con = new ContaDao();

if (isset($_POST['btnFinalizar'])) {
    $tipo = $_POST['tipo'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $categoria = $_POST['categoria'];
    $empresa = $_POST['empresa'];
    $conta = $_POST['conta'];
    $observacao = $_POST['observacao'];

    $objdao = new MovimentoDao();

    $ret = $objdao->RealizarMovimento($tipo, $data, $valor, $categoria, $empresa, $conta, $observacao);
}

$categorias = $dao_cat->ConsultarCategoria();
$empresas = $dao_emp->ConsultarEmpresa();
$contas = $dao_con->ConsultarConta();
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

                        <h2>Realizar Movimento</h2>
                        <h5>Aqui você poderá cadastrar todos os seus movimentos de entrada ou saída. </h5>
                    </div>

                </div>
                <!-- /. ROW  -->
                <hr />

                <form action="realizar_movimento.php" method="post">
                    <div class="col-md-6">
                        <div class="form-group" id="divtipo">
                            <label>Tipo do Movimento*</label>
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="">Selecione</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saída</option>
                            </select>
                        </div>
                        <div class="form-group" id="divdata">
                            <label>Data*</label>
                            <input type="date" name="data" class="form-control" placeholder="Coloque a data do movimento" id="data" />
                        </div>
                        <div class="form-group" id="divvalor">
                            <label>Valor*</label>
                            <input class="form-control" name="valor" placeholder="Digite o valor do movimento" id="valor" />
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group" id="divcategoria">
                            <label>Categoria*</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="">Selecione</option>
                                <?php foreach ($categorias as $item) { ?>
                                    <option value="<?= $item['id_categoria'] ?>">
                                        <?= $item['nome_categoria'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group" id="divempresa">
                            <label>Empresa*</label>
                            <select class="form-control" name="empresa" id="empresa">
                                <option value="">Selecione</option>
                                <?php foreach ($empresas as $item) { ?>
                                    <option value="<?= $item['id_empresa'] ?>">
                                        <?= $item['nome_empresa'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group" id="divconta">
                            <label>Conta*</label>
                            <select class="form-control" name="conta" id="conta">
                                <option value="">Selecione</option>
                                <?php foreach ($contas as $item) { ?>
                                    <option value="<?= $item['id_conta'] ?>">
                                        <?= 'Banco: ' . $item['banco_conta'] . ', Agência: ' . $item['agencia_conta'] . ' / Número: ' . $item['numero_conta'] . ' - Saldo R$ ' . $item['saldo_conta']  ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">

                        <div class="form-group">
                            <label>Observação (opcional)</label>
                            <textarea class="form-control" name="observacao" rows="3" maxlength="100"></textarea>
                        </div>
                        <button type="submit" onclick="return ValidarMovimento()" name="btnFinalizar" class="btn btn-success">Finalizar lançamento</button>
                    </div>
                </form>

                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>


</body>

</html>