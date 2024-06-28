<?php
require_once '../model/complementos.php';

class ComplementoController {

    public function escolha($submit){

        switch($submit){
            case "cadastro":
                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                $preco = $_POST['preco'];
                $img = $_POST['imagem'];
                if ($nome && $tipo && $preco && $img) {
                    $novoComplemento = new Complemento();
                    $novoComplemento->cadastrarComplemento($nome, $tipo, $preco, $img);
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
            case "remover":
                $id = $_POST['id'];
                if ($id) {
                    $novoComplemento = new Complemento();
                    $novoComplemento->removerComplemento($id);
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
                    $novoComplemento = new Complemento();
                    $novoComplemento->editarComplemento($id, $nome, $tipo, $preco, $img);
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
        }
    }

    public function listar() {
        $complemento = new Complemento();
        $complementos = $complemento->ListarComplementos();
        return $complementos;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $submit = $_GET['acao'] ?? '';
    $controller = new ComplementoController();
    $controller->escolha($submit);
} 

?>