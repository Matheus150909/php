<?php

require_once('../config/conexao.php');

class User
{


  private int $id;
  private String $nome;
  private String $email;
  private String $password;






  public function getId()
  {
    return $this->id;
  }


  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }


  public function getNome()
  {
    return $this->nome;
  }


  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }


  public function getEmail()
  {
    return $this->email;
  }


  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }


  public function getPassword()
  {
    return $this->password;
  }


  public function setPassword($password)
  {
    $this->password = $password;

    return $this;
  }

  function createUser($nome, $email, $senha)
  {
    $mysqli = new Conn();

    $nome = $mysqli->getConnection()->real_escape_string($nome);
    $email = $mysqli->getConnection()->real_escape_string($email);
    $senha = $mysqli->getConnection()->real_escape_string($senha);

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    return $mysqli->getConnection()->query($sql);
  }

  function listUser()
  {
    $mysqli = new Conn();
    $sql = "SELECT * FROM user";
    return $mysqli->getConnection()->query($sql);
  }
  function findByid($id)
  {

    $mysqli = new Conn();
    $sql = "SELECT * FROM user WHERE id=" . $id;
    return $mysqli->getConnection()->query($sql);
  }





  function editarUser($id, $nome, $email, $senha)
  {
    $mysqli = new Conn();

    $nome = $mysqli->getConnection()->real_escape_string($nome);
    $email = $mysqli->getConnection()->real_escape_string($email);
    $senha = $mysqli->getConnection()->real_escape_string($senha);

    if (!empty($senha)) {
      $senha = password_hash($senha, PASSWORD_DEFAULT);

      $sql = "UPDATE user SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'";

      return $mysqli->getConnection()->query($sql);
    }
    $sql = "UPDATE user SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'";
    return $mysqli->getConnection()->query($sql);
  }
}
