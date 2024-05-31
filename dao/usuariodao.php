<?php

require_once 'conexao.php';
require_once 'utildao.php';

class UsuarioDao extends Conexao
{

    public function CarregarMeusDados()
    {
        $conexao = parent::retornaConexao();

        $comando_sql = 'SELECT nome_usuario , 
                               email_usuario
                        FROM tb_usuario
                       WHERE id_usuario = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDao::CodigoLogado());

        // Remove os index dentro do array, permanecendo somente com as colunas do BD
        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function GravarMeusDados($nome, $email)
    {
        if (trim($nome) == '' || trim($email) == '')
            return 0;

        if (strlen($nome) < 3)
            return -2;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return -5;

        if ($this->VerificarEmailDuplicadoAlteracao($email) != 0) {
            return -7;
        }

        // Continuar o codigo desta funçao...
        // Retornar 1 se for salvo com sucesso no banco de dados
        // Retornar -1 se houver algum porblema para salvar no banco de dados

        $conexao = parent::retornaConexao();

        $comando_sql = 'UPDATE tb_usuario
                           SET nome_usuario = ?,
                               email_usuario = ?
                         WHERE id_usuario = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, UtilDao::CodigoLogado());

        try {

            $sql->execute();

            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function CadastrarUsuario($nome, $email, $senha, $repetirsenha)
    {
        if (trim($nome) == '' || trim($email) == '' || trim($senha) == '' || trim($repetirsenha) == '')
            return 0;

        if (strlen($nome) < 3)
            return -2;

        if (strlen($senha) < 6)
            return -3;

        if (trim($senha) != trim($repetirsenha))
            return -4;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return -5;

        if ($this->VerificarEmailDuplicadoCadastro($email) != 0) {
            return -7;
        }

        $conexao = parent::retornaConexao();

        $comando_sql = 'INSERT INTO tb_usuario
                (nome_usuario, email_usuario, senha_usuario, data_cadastro)
                VALUES (?, ?, ?, ?)';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome);
        $sql->bindValue(2, $email);
        $sql->bindValue(3, $senha);
        $sql->bindValue(4, date('Y-m-d'));

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }


    public function ValidarLogin($email, $senha)
    {
        if (trim($email) == '' || trim($senha) == '')
            return 0;

        if (strlen($senha) < 6)
            return -3;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return -5;

        if (trim($email == ''))
            return 0;

        $conexao = parent::retornaConexao();
        $comando_sql = 'SELECT id_usuario, nome_usuario FROM tb_usuario WHERE email_usuario = ? AND senha_usuario = ? ';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $email);
        $sql->bindValue(2, $senha);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        $user = $sql->fetchAll();

        if (count($user) == 0)
            return -8;

        $cod = $user[0]['id_usuario'];
        $nome = $user[0]['nome_usuario'];
        UtilDao::CriarSessao($cod, $nome);
        header('location: inicial.php');
        exit;
    }

    public function VerificarEmailDuplicadoCadastro($email)
    {
        if (trim($email == ''))
            return 0;

        $conexao = parent::retornaConexao();
        $comando_sql = 'SELECT count(email_usuario) as contar FROM tb_usuario WHERE email_usuario = ? ';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $email);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        $contar = $sql->fetchAll();

        return $contar[0]['contar'];
    }

    public function VerificarEmailDuplicadoAlteracao($email)
    {
        if (trim($email == ''))
            return 0;

        $conexao = parent::retornaConexao();
        $comando_sql = 'SELECT count(email_usuario) as contar FROM tb_usuario WHERE email_usuario = ? AND id_usuario != ? ';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $email);
        $sql->bindValue(2, UtilDao::CodigoLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        $contar = $sql->fetchAll();

        return $contar[0]['contar'];
    }
}
