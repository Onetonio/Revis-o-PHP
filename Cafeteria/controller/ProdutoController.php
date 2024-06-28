<?php
require_once '../model/produtos.php';

class ProdutoController {

    public function escolha($submit){
        switch($submit){
            case "cadastro":
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $preco = $_POST['preco'];
                $img = $_POST['imagem'];
                if ($nome && $tipo && $preco && $img) {
                    $novoProduto = new Produto();
                    $novoProduto->cadastrarProduto($nome, $tipo, $preco, $img);
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
            case "remover":
                $id = $_POST['id'];
                if ($id) {
                    $novoProduto = new Produto();
                    $novoProduto->removerProduto($id);
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
            case "editar":
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $preco = $_POST['preco'];
                $img = $_POST['imagem'];
                if ($id && $nome && $tipo && $preco && $img) {
                    $novoProduto = new Produto();
                    $novoProduto->editarProduto($id, $nome, $tipo, $preco, $img);
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
        }
    }

    public function listar() {
        $produto = new Produto();
        $produtos = $produto->ListarProdutos();
        return $produtos;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $submit = $_GET['acao'] ?? '';
    $controller = new ProdutoController();
    $controller->escolha($submit);
} 

?>