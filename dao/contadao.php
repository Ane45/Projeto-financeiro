<?php

require_once 'conexao.php';
require_once 'utildao.php';

class ContaDao extends Conexao
{
    public function CadastrarConta($banco, $agencia, $numero, $saldo)
    {

        if (trim($banco) == '' || trim(is_numeric($agencia)) == '' || trim(is_numeric($numero)) == '' || trim(is_numeric($saldo)) == '')
            return 0;


        $conexao = parent::retornaConexao();

        $comando_sql = 'INSERT INTO tb_conta
                        (banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
                        VALUES (?, ?, ?, ?, ?);';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $banco);
        $sql->bindValue(2, $agencia);
        $sql->bindValue(3, $numero);
        $sql->bindValue(4, $saldo);
        $sql->bindValue(5, UtilDao::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function ExcluirConta($idConta)
    {
        if ($idConta == '')
            return 0;

        $conexao = parent::retornaConexao();

        $comando_sql = 'DELETE 
                          FROM tb_conta 
                         WHERE id_conta = ? 
                           and id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idConta);
        $sql->bindValue(2, UtilDao::CodigoLogado());


        try {

            $sql->execute();
            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();
            return -6;
        }
    }

    public function AlterarConta($idConta, $banco, $agencia, $numero, $saldo )
    {

        if (trim($banco) == '' || trim(is_numeric($agencia)) == '' || trim(is_numeric($numero)) == '' || trim(is_numeric($saldo)) == '' || $idConta == '') {
            return 0;
        }

        $conexao = parent::retornaConexao();

        $comando_sql = 'UPDATE tb_conta
                        SET banco_conta = ?,
                           agencia_conta = ?,
                           numero_conta = ?,
                           saldo_conta = ?
                     WHERE id_conta =  ?
                       AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $banco);
        $sql->bindValue(2, $agencia);
        $sql->bindValue(3, $numero);
        $sql->bindValue(4, $saldo);
        $sql->bindValue(5, $idConta);
        $sql->bindValue(6, UtilDao::CodigoLogado());

        try {

            $sql->execute();
            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();
            return -1;
        }
    }

    public function DetalharConta($idConta)
    {
        $conexao = parent::retornaConexao();

        $comando_sql = 'SELECT id_conta , 
                               banco_conta,
                               agencia_conta,
                               numero_conta,
                               saldo_conta
                          FROM tb_conta
                         WHERE id_conta = ?
                           AND id_usuario = ? order by banco_conta ASC';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idConta);
        $sql->bindValue(2, UtilDao::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function ConsultarConta()
    {

        $conexao = parent::retornaConexao();

        $comando_sql =     'SELECT id_conta , 
                                   banco_conta,
                                   agencia_conta,
                                   saldo_conta,
                                   numero_conta
                              FROM tb_conta
                             WHERE id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDao::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

}
