<?php
require_once '../model/conexao.php';
session_start(); 
?>

<html>
    <head>
        <title>Coffee Show</title>
        <link rel="stylesheet" href="../public/css/gabreu.css">
        <link rel="stylesheet" href="../public/css/nav.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="shortcut icon" href="../public/images/icone2.png" type="image/x-icon">
    </head>
<body>
<nav class="navbar navbar-light bg-light">
        <div class="content-nav" style="<?php if(isset($_SESSION['usuario'])){echo "gap: 25vh !important;";}?>">
            <a class="navbar-brand">
                <img onclick="login()" src="../public/images/icone2.png" width="32" height="32" class="d-inline-block align-top icone">
                <img onclick="login()" src="../public/images/logo1.png" height="32" class="d-inline-block align-top icone">
            </a>
    
            <div class="links">
                <a href="produtos.php">Nossos produtos</a>
                <a href="sobre.php">Sobre</a>
                <a href="contato.php">Contato</a>
                <?php
                if(isset($_SESSION['usuario'])){
                    echo "<a href='dashboard.php'>Dashboard</a>";
                    echo "<a href='sair.php'>Logout</a>";
                }else{
                    echo "<a href='login-cafe.php'>Login</a>";
                }
                ?>
            </div>
        </div>
    </nav>

    <?php
    if(isset($_SESSION['usuario'])){
        echo "<a style='color: white; margin-left: 5px; position: absolute; user-select: none;'>logado como: " . $_SESSION['usuario'] . "</a>";
    }
    ?>

    <div class="page">
        <div class="content-page text-center">

            <div class="logo2">
                <img src="../public/images/logo2.png" height="160" class="d-inline-block align-top" alt="">
            </div>

            <div class="sub-cafe">Mais que um café, uma experiência memorável!</div>

            <hr class="hr">

            <div class="text-center images">
                <div>
                    <a>Local Aconchegante</a> 
                    <a>Espaço Aquecido</a>
                </div>
                <img src="../public/images/coffe-img1.png" class="img-fluid img-thumbnail">
                <img src="../public/images/coffe-img2.png" class="img-fluid img-thumbnail">
            </div>

            <div class="text-center images">
                <div>
                    <a>Boa Apresentação</a> 
                    <a>Cafés Saborosos</a>
                </div>
                <img src="../public/images/coffe-img3.png" class="img-fluid img-thumbnail">
                <img src="../public/images/coffe-img4.png" class="img-fluid img-thumbnail">
            </div>

            <hr class="hr2">

        </div>
    </div>
</body>

<footer class="text-center text-lg-start">
    <div class="p-3" style="background-color: #f8f9fa !important;">
        <a>2024 Copyright Coffee Show ®</a>
    </div>
</footer>

</html>

<script>
function login(){
    window.location.href = "http://localhost/Cafeteria/view/index.php";
}
</script>