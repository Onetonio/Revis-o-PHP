<?php
require_once '../model/usuarios.php';

class UsuarioController {

    public function escolha($submit){

        switch($submit){
            case "cadastro":
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                if ($email && $senha) {
                    $novoUsuario = new Usuario();
                    $novoUsuario->cadastrarUsuario($email, $senha);
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
            case "cadastro2":
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $codigo = $_POST['codigo'];
                if ($email && $senha && $codigo) {

                    if($codigo == "1337"){
                        $novoUsuario = new Usuario();
                        $novoUsuario->cadastrarUsuario2($email, $senha);
                    }else{
                        echo "Código de administrador errado!";
                        echo "<br><br><a href='http://localhost/Cafeteria/view/cadastro-cafe.php'>Voltar</a>";
                    }
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
            case "remover":
                $id = $_POST['id'];
                if ($id) {
                    $novoUsuario = new Usuario();
                    $novoUsuario->removerUsuario($id);
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
            case "editar":
                $id = $_POST['id'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                if ($email && $senha) {
                    $novoUsuario = new Usuario();
                    $novoUsuario->editarUsuario($id, $email, $senha);
                } else {
                    echo "Dados incompletos para cadastro.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
            case "logar":
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                
                if ($email && $senha) {
                    $loginUsuario = new Usuario();
                    if($loginUsuario->logarUsuario($email, $senha) != null){
                        session_start(); 
                        $_SESSION['usuario'] = $email;

                        if (isset($_POST['remember'])){
                            setcookie('email', $email, time()+60, '/');
                            setcookie('password', $senha, time()+60, '/');
                            setcookie('check', "true", time()+60, '/');
                        }else{
                            setcookie('email', "", time()-1, '/');
                            setcookie('password', "", time()-1, '/');
                            setcookie('check', "", time()-1, '/');
                        }

                        header('Location: http://localhost/Cafeteria/view/dashboard.php');
                        exit();
                    }
                } else {
                    echo "Dados incompletos para login.";
                    echo "<br><br><a href='http://localhost/Cafeteria/view/dashboard.php'>Voltar</a>";
                }
                break;
        }
    }

    public function listar() {
        $usuario = new Usuario();
        $usuarios = $usuario->ListarUsuarios();
        return $usuarios;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $submit = $_GET['acao'] ?? '';
    $controller = new UsuarioController();
    $controller->escolha($submit);
}
?>