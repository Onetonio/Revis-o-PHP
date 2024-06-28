<?php

include_once 'conexao.php';

class Produto {
 private $id;
 private $nome;
 private $tipo;
 private $preco;
 private $img;

 public function __construct($id = null, $nome = null, $tipo = null, $preco = null, $img = null) {
    $this->id = $id;
    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->preco = $preco;
    $this->img = $img;
}
 
// Getters e Setters
public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getNome() {
    return $this->nome;
}

public function setNome($nome) {
    $this->nome = $nome;
}

public function getTipo() {
    return $this->tipo;
}

public function setTipo($tipo) {
    $this->tipo = $tipo;
}

public function getPreco() {
    return $this->preco;
}

public function setPreco($preco) {
    $this->preco = $preco;
}

public function getImg() {
    return $this->img;
}

public function setImg($img) {
    $this->img = $img;
}
 
public function cadastrarProduto($nome, $tipo, $preco, $img) {
    try {
    $conn = Conexao::conectar();

    $sql = "insert into produtos (id, nome, tipo, preco, img) values ('NULL','$nome','$tipo','$preco','$img')";
    $stmt = $conn->prepare($sql); 

    if ($stmt->execute()) {
        echo "Produto cadastrado com sucesso!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    } else {
        echo "Erro ao cadastrar produto: " . $stmt->errorInfo()[2];
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erro ao cadastrar produto! " . $e->getMessage();
    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    return [];
}
}
 
public function removerProduto($id) {
    try {
    $conn = Conexao::conectar();

    $sql = "DELETE FROM produtos WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "Produto removido com sucesso!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    } else {
        echo "Erro ao remover produto: " . $stmt->errorInfo()[2];
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erro ao remover produto! " . $e->getMessage();
    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    return [];
}
}
 
public function editarProduto($id, $nome, $tipo, $preco, $img) {
    try {
    $conn = Conexao::conectar();

    $sql = "UPDATE produtos SET nome = '$nome', tipo = '$tipo', preco = '$preco', img = '$img' WHERE id = '$id'";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    } else {
        echo "Erro ao atualizar produto: " . $stmt->errorInfo()[2];
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erro ao editar produto! " . $e->getMessage();
    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
    return [];
}
}
 
public function ListarProdutos() {
    try {
        $conn = Conexao::conectar();

        $sql = "SELECT * FROM produtos ORDER BY id";
        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $produtos = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produto = new Produto();
            $produto->setId($row["id"]);
            $produto->setNome($row["nome"]);
            $produto->setTipo($row["tipo"]);
            $produto->setPreco($row["preco"]);
            $produto->setImg($row["img"]);

            $produtos[] = $produto;

        }
        $conn = null;

        return $produtos;
    } catch (PDOException $e) {
        echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
        echo "Erro ao listar produto! " . $e->getMessage();
        return [];
    }
}
}
?>