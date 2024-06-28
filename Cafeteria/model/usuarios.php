<?php

include_once 'conexao.php';

class Usuario {
 private $id;
 private $email;
 private $senha;

public function __construct($id = null, $email = null, $senha = null) {
    $this->id = $id;
    $this->email = $email;
    $this->senha = $senha;
}

// Getters e Setters
public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getEmail() {
    return $this->email;
}

public function setEmail($email) {
    $this->email = $email;
}

public function getSenha() {
    return $this->senha;
}

public function setSenha($senha) {
    $this->senha = $senha;
}

public function logarUsuario($email, $senha) {
    try {
    $conn = Conexao::conectar();

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch();

    if (!$user) {
        echo "Usuário ou senha incorretas!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/login-cafe.php'>Voltar</a>";
    } else {
        echo "Usuário ou senha incorretas!";
        return $user;
    }
} catch (PDOException $e) {
    echo "Erro ao fazer login! " . $e->getMessage();
    return null;
}
}


 
public function cadastrarUsuario($email, $senha) {
    try {
    $conn = Conexao::conectar();

    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo "Usuário já cadastrado com esse e-mail!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    }else{

    $sql = "insert into usuario (id, email, senha) values ('NULL','$email','$senha')";
    $stmt = $conn->prepare($sql); 

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    } else {
        echo "Erro ao cadastrar usuario: " . $stmt->errorInfo()[2];
    }

    $conn = null;
} 
}catch (PDOException $e) {
    echo "Erro ao cadastrar usuário! " . $e->getMessage();
    return [];
}
}

public function cadastrarUsuario2($email, $senha) {
    try {
    $conn = Conexao::conectar();

    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo "Usuário já cadastrado com esse e-mail!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/cadastro-cafe.php'>Voltar</a>";
    }else{

    $sql = "insert into usuario (id, email, senha) values ('NULL','$email','$senha')";
    $stmt = $conn->prepare($sql); 

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/login-cafe.php'>Voltar</a>";
    } else {
        echo "Erro ao cadastrar usuario: " . $stmt->errorInfo()[2];
    }

    $conn = null;
} 
}catch (PDOException $e) {
    echo "Erro ao cadastrar usuário! " . $e->getMessage();
    return [];
}
}
 
public function removerUsuario($id) {
    try {
    $conn = Conexao::conectar();

    $sql = "DELETE FROM usuario WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "Usuário removido com sucesso!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    } else {
        echo "Erro ao remover usuário: " . $stmt->errorInfo()[2];
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erro ao remover usuário! " . $e->getMessage();
    return [];
}
}

public function editarUsuario($id, $email, $senha) {
    try {
    $conn = Conexao::conectar();

    $sql = "UPDATE usuario SET  email = '$email', senha = '$senha' WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "usuário atualizado com sucesso!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    } else {
        echo "Erro ao atualizar usuário: " . $stmt->errorInfo()[2];
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erro ao editar usuário! " . $e->getMessage();
    return [];
}
}
 
public function ListarUsuarios() {
    try {
        $conn = Conexao::conectar();

        $sql = "SELECT * FROM usuario ORDER BY id";
        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $usuarios = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $usuario = new Usuario();
            $usuario->setId($row["id"]);
            $usuario->setEmail($row["email"]);
            $usuario->setSenha($row["senha"]);
            $usuarios[] = $usuario;
        }
        $conn = null;

        return $usuarios;
    } catch (PDOException $e) {
        echo "Erro ao listar usuários! " . $e->getMessage();
        return [];
    }
}
}
?>