<?php

require_once 'conexao.php';
require_once 'utildao.php';

class CategoriaDao extends Conexao
{
    public function CadastrarCategoria($nome)
    {
        if (trim($nome) == '') {
            return 0;
        }

        // 1* passo: Criar uma variável que receberá o objeto de conexao
        $conexao = parent::retornaConexao();

        // 2* passo: Criar uma variável que receberá o texto do comando SQL que deverá ser executado no BD (Banco de dados)
        $comando_sql = 'INSERT INTO tb_categoria
                        (nome_categoria, id_usuario)
                        VALUES (?, ?);';

        // 3* passo: Criar um objeto que será configurado e levado no BD para ser executado
        $sql = new PDOStatement();

        // 4* passo: Colocar dentro do objeto $sql a conexao preparada para executar o comando_sql
        $sql = $conexao->prepare($comando_sql);

        // 5* passo: Verificar se no comando_sql eu tenho ? para ser configurado. Se tiver, configurar os bindValues
        $sql->bindValue(1, $nome);
        $sql->bindValue(2, UtilDao::CodigoLogado());

        try {

            // 6* passo: Executar no BD
            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            //echo $ex->getMessage();
            return -1;
        }
    }

    public function ExcluirCategoria($idCategoria)
    {
        if ($idCategoria == '')
            return 0;

        $conexao = parent::retornaConexao();

        $comando_sql = 'DELETE FROM tb_categoria WHERE id_categoria = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idCategoria);


        try {

            $sql->execute();
            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();
            return -6;
        }
    }


    public function AlterarCategoria($nome, $idCategoria)
    {

        if (trim($nome) == '' || $idCategoria == '') {
            return 0;
        }

        $conexao = parent::retornaConexao();

        $comando_sql = 'UPDATE tb_categoria
                           SET nome_categoria = ?
                         WHERE id_categoria =  ?
                           AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $idCategoria);
        $sql->bindValue(3, UtilDao::CodigoLogado());

        try {

            $sql->execute();
            return 1;
        } catch (Exception $ex) {

            echo $ex->getMessage();
            return -1;
        }
    }

    public function ConsultarCategoria($nome_pesquisar = '')
    {
        $conexao = parent::retornaConexao();

        $comando_sql = 'SELECT id_categoria,
                               nome_categoria
                          FROM tb_categoria
                         WHERE id_usuario = ?';

        if(trim($nome_pesquisar) != ""){
            $comando_sql .= ' AND nome_categoria LIKE ?';
        }

        $comando_sql .= 'ORDER BY nome_categoria ASC';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDao::CodigoLogado());

        if(trim($nome_pesquisar) != ""){
            $sql->bindValue(2, "%$nome_pesquisar%");
        }

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function DetalharCategoria($idCategoria)
    {
        $conexao = parent::retornaConexao();

        $comando_sql = 'SELECT id_categoria,
                               nome_categoria
                          FROM tb_categoria
                         WHERE id_categoria = ?
                           AND id_usuario = ?';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idCategoria);
        $sql->bindValue(2, UtilDao::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }
}
