<?php

require_once 'conexao.php';
require_once 'utildao.php';

class EmpresaDao extends Conexao
{

    public function CadastrarEmpresa($nome, $telefone, $endereco)
    {
        if (trim($nome) == '') {
            return 0;
        } else if ($telefone !== '' && !is_numeric($telefone)) {
            return -9;
        }


        $conexao = parent::retornaConexao();

        $comando_sql = 'INSERT INTO tb_empresa
                    (nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
                    VALUES (?, ?, ?, ?);';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $telefone);
        $sql->bindValue(3, $endereco);
        $sql->bindValue(4, UtilDao::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function ExcluirEmpresa($idEmpresa)
    {
        if ($idEmpresa == '')
            return 0;

        $conexao = parent::retornaConexao();

        $comando_sql = 'DELETE 
                          FROM tb_empresa 
                         WHERE id_empresa = ? 
                           and id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idEmpresa);
        $sql->bindValue(2, UtilDao::CodigoLogado());


        try {

            $sql->execute();
            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();
            return -6;
        }
    }

    public function AlterarEmpresa($idEmpresa, $nomeempresa, $telefoneempresa, $enderecoempresa)
    {

        if (trim($nomeempresa) == '' || $idEmpresa == '') {
            return 0;
        } else if ($telefoneempresa !== '' && !is_numeric($telefoneempresa)) {
            return -9;
        }


        $conexao = parent::retornaConexao();

        $comando_sql = 'UPDATE tb_empresa
                        SET nome_empresa = ?,
                           telefone_empresa = ?,
                           endereco_empresa = ?
                     WHERE id_empresa =  ?
                       AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nomeempresa);
        $sql->bindValue(2, $telefoneempresa);
        $sql->bindValue(3, $enderecoempresa);
        $sql->bindValue(4, $idEmpresa);
        $sql->bindValue(5, UtilDao::CodigoLogado());

        try {

            $sql->execute();
            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();
            return -1;
        }
    }

    public function ConsultarEmpresa()
    {

        $conexao = parent::retornaConexao();

        $comando_sql =     'SELECT id_empresa , 
                                   nome_empresa,
                                   telefone_empresa,
                                   endereco_empresa
                              FROM tb_empresa
                             WHERE id_usuario = ? order by nome_empresa ASC';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDao::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function DetalharEmpresa($idEmpresa)
    {
        $conexao = parent::retornaConexao();

        $comando_sql = 'SELECT id_empresa , 
                                   nome_empresa,
                                   telefone_empresa,
                                   endereco_empresa
                              FROM tb_empresa
                             WHERE id_empresa = ?
                               AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idEmpresa);
        $sql->bindValue(2, UtilDao::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}
