<?php

require_once '../dao/utildao.php';
UtilDao::VerificarLogado();
require_once '../dao/movimentodao.php';

$objdao = new MovimentoDao();

$total_entrada = $objdao->TotalEntrada();
$total_saida = $objdao->TotalSaida();
$movs = $objdao->MostrarUltimosLancamentos();
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

                        <h2>Página Inicial</h2>
                        <h5>Aqui voce acompanha todos os números de uma forma geral.<h5>
                    </div>
                </div>

                <!-- /. ROW  -->
                <hr />
                <div class="col-md-6">
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>R$ <?= $total_entrada[0]['total'] != null ? number_format($total_entrada[0]['total'], 2, ',', '.') : '0' ?> </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            TOTAL DE ENTRADA

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary text-center no-boder bg-color-red">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>R$ <?= $total_saida[0]['total'] != '' ? number_format($total_saida[0]['total'], 2, ',', '.') : '0' ?> </h3>
                        </div>
                        <div class="panel-footer back-footer-red">
                            TOTAL DE SAÍDA

                        </div>
                    </div>
                </div>

                <hr>

                <?php if (count($movs) > 0) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Últimos 10 lançamentos de Movimento
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Data</th>
                                                    <th>Tipo</th>
                                                    <th>Categoria</th>
                                                    <th>Empresa</th>
                                                    <th>Conta</th>
                                                    <th>Valor</th>
                                                    <th>Observação</th>
                                                  

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $total = 0;
                                                for ($i = 0; $i < count($movs); $i++) {
                                                    if ($movs[$i]['tipo_movimento'] == 1) {
                                                        $total = $total + $movs[$i]['valor_movimento'];
                                                    } else {
                                                        $total = $total - $movs[$i]['valor_movimento'];
                                                    }
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $movs[$i]['data_movimento'] ?></td>
                                                        <td><?= $movs[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?></td>
                                                        <td><?= $movs[$i]['nome_categoria'] ?></td>
                                                        <td><?= $movs[$i]['nome_empresa'] ?></td>
                                                        <td><?= $movs[$i]['banco_conta'] ?> / Agência: <?= $movs[$i]['agencia_conta'] ?> - Número: <?= $movs[$i]['numero_conta'] ?></td>
                                                        <td>R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                        <td><?= $movs[$i]['obs_movimento'] ?></td>
                                                     
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <center>
                                            <label style="color: <?= $total < 0 ? 'red' : 'green' ?>;">TOTAL: R$ <?= number_format($total, 2, ',', '.'); ?> </label>
                                        </center>
                                    </div>

                                </div>

                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                <?php }else { ?>
                    <center>
                    <div class="alert alert-info col-md-12">
                    Não existe nenhum movimento para ser exibido.
                 </div> 
                 </center>
                <?php } ?>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>

</body>


</html>