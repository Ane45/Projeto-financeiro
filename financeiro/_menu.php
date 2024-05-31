<?php

require_once '../dao/utildao.php';

if(isset($_GET['close']) && $_GET['close'] == '1'){
    UtilDao::Deslogar();
}

?>


<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

        <li>
                <a href="inicial.php"><i class="fa fa-file fa-4x"></i> Página Inicial</a>
            </li>


            <li>
                <a href="meus_dados.php"><i class="fa fa-user fa-4x"></i> Meus dados</a>
            </li>
        

            <li>
                <a href="#"><i class="fa fa-list fa-3x"></i> Categoria<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_categoria.php">Nova Categoria</a>
                    </li>
                    <li>
                        <a href="consultar_categoria.php">Consultar Categoria</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-briefcase fa-3x"></i> Empresa<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_empresa.php">Nova Empresa</a>
                    </li>
                    <li>
                        <a href="consultar_empresa.php">Consultar Empresa</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-money fa-3x"></i> Conta<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_conta.php">Nova Conta</a>
                    </li>
                    <li>
                        <a href="consultar_conta.php">Consultar Conta</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-dollar fa-4x"></i> Movimento<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="realizar_movimento.php">Novo Movimento</a>
                    </li>
                    <li>
                        <a href="consultar_movimento.php">Consultar movimento</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="_menu.php?close=1"><i class="fa fa-power-off fa-3x"></i> Sair</a>
            </li>

        </ul>

    </div>

</nav>