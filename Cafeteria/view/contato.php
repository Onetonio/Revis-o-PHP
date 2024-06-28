<?php
require_once '../model/conexao.php';
session_start(); 
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/davi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../public/images/icone2.png" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/nav.css">
   <title>Contato</title>
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


<div class="content">
   <div class="box">
   <div class="titulo-contato">
      <h1>Como entrar em contato</h1>
   </div>
   <div class="info-contato">
      <a>Você se interessou no nosso site e nossos produtos?
         <br>
         Seja uma dúvida, sugestão ou algum problema encontrado, estamos aqui para ajudar. 
         <br>
         Caso você deseje, entre em contato conosco:</a>
   </div>
   <div class="titulo-contato">
      <h1>E-mail</h1>
   </div>
   <div class="info-contato">
      <a>Fale com a nossa equipe através do nosso email.
         <br>
            * cafeteria@email.com
         <br>
         Faremos o possível para responder dentro de 24h.</a>
   </div>
   <div class="titulo-contato">
      <h1>Telefone</h1>
   </div>
   <div class="info-contato">
      <a>+55 (41) 99696-6969</a>
   </div>
   <div class="titulo-contato">
      <h1>Endereço</h1>
   </div>
   <div class="info-contato">
      <a>Praça General Osório, Curitiba - PR
         <br>
         82590-300</a>
   </div>
   </div>
</div> 

</body>

<footer class="text-center text-lg-start">
   <div class="p-3" style="background-color: #f8f9fa !important;">
     © 2024 Copyright:
     <a class="">Cafeteria.com</a>
   </div>
 </footer>

<script>
        function login(){
            window.location.href = "http://localhost/Cafeteria/view/index.php";
}
</script>

</html>
