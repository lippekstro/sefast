<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/db/conexao.php';

class Usuario
{
    public $id_usuario;
    public $nome_usuario;
    public $email;
    public $senha;
    public $telefone;
    public $site;
    public $foto;
    public $nivel_acesso;


    public function __construct($id = false)
    {
        if ($id) {
            $this->id_usuario = $id;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $sql = "SELECT * FROM usuarios WHERE id_usuario = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
        $resultado = $stmt->fetch();
        $this->nome_usuario = $resultado['nome_usuario'];
        $this->email = $resultado['email'];
        $this->senha = $resultado['senha'];
        $this->telefone = $resultado['telefone'];
        $this->site = $resultado['site_usuario'];
        $this->foto = $resultado['foto_usuario'];
        $this->nivel_acesso = $resultado['nivel_acesso'];
    }

    public function criar()
    {
        $sql = "INSERT INTO usuarios (nome_usuario, email, senha, telefone) VALUES (:nome, :email, :senha, :tel)";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome_usuario);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':tel', $this->telefone);
        $stmt->execute();
    }

    public static function listar()
    {
        $sql = "SELECT * FROM usuarios";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        return $resultado;
    }

    public function atualizar()
    {
        $sql = "UPDATE usuarios SET nome_usuario = :nome, email = :email, senha = :senha, telefone = :tel, site_usuario = :siteusuario, foto_usuario = :foto  WHERE id_usuario = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':nome', $this->nome_usuario);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':tel', $this->telefone);
        $stmt->bindValue(':siteusuario', $this->site);
        $stmt->bindValue(':foto', $this->foto);
        $stmt->bindValue(':id', $this->id_usuario);


        $stmt->execute();
    }

    public function deletar()
    {
        $sql = "DELETE FROM usuarios WHERE id_usuario = :id";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
    }

    public static function logar($email, $senha)
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $conexao = Conexao::criarConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $resultado = $stmt->fetch();
        
        session_start();

        if ($resultado['id_usuario'] && password_verify($senha, $resultado['senha'])) {
            $_SESSION['id_usuario'] = $resultado['id_usuario'];
            $_SESSION['nome_usuario'] = $resultado['nome_usuario'];
            $_SESSION['email'] = $resultado['email'];
            $_SESSION['foto'] = $resultado['foto_usuario'];
            $_SESSION['telefone'] = $resultado['telefone'];
            $_SESSION['nivel_acesso'] = $resultado['nivel_acesso'];

            header('Location: /sefast/index.php');
        } else {
            $_SESSION['aviso'] = "EMAIL OU SENHA INCORRETOS";
            header('Location: /sefast/views/login.php');
        }
    }
}
