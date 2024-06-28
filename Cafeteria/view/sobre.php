<?php
require_once '../model/conexao.php';
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../public/css/sobre.css">
  <link rel="stylesheet" href="../public/css/nav.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sobre Nós</title>
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

<div class="titulo">
    <div class="about-content">
    <a>Sobre nós</a>
</div>
</div>

<div class="about">
    <div class="about-content">
    <a>Somos apaixonados por café e pela experiência de compartilhá-lo com os nossos clientes. 
    O Café Delícia começou como um sonho e se tornou realidade em 2010, quando abrimos nossa primeira cafeteria no coração da cidade. 
    Desde então, temos nos dedicado a servir os melhores grãos de café, preparados por baristas experientes, em um ambiente acolhedor e amigável.</a>
    <br>
    <br>
    <h2>Nosso Objetivo</h2>
    <br>
    <a>Nosso objetivo é proporcionar momentos de prazer e conforto a todos os que nos visitam, seja para uma rápida pausa durante o expediente ou para uma conversa descontraída entre amigos. 
    Valorizamos a qualidade, a autenticidade e o cuidado em cada xícara que servimos.</a>
    <br>
    <br>
    <h2>Nossa História</h2>
    <br>
    <a>O Melhor do Café nasceu a partir de uma ideia em ajudar o maior número de pessoas a conhecerem mais sobre o universo do café.

        Somos uma marca criada em 2020, inicialmente com a ideia em formato de revista, mas com o avanço da tecnologia, decidimos migrar totalmente para a versão digital, lançando nosso site em 2022.
        
        Apesar de todos os desafios enfrentados até aqui, nosso site tem crescido exponencialmente. 
        
        Hoje, recebemos mais de 1000 visitantes todos os dias que contam com os nossos conteúdos e guias de compras para encontrar os melhores produtos para as suas necessidades.</a>
    <br><br>
    <h2>Quem somos</h2>
    <br>
    <a>O time do Melhor do Café é um grupo diversificado de entusiastas do café, baristas e coffee lovers.

        Nossa paixão por tomar um cafezinho delicioso todas as manhãs, depois do almoço ou durante o expediente de trabalho, é o que nos une.
        
        O nosso conteúdo é baseado em experiências da vida real,  pesquisa em evidências e ciência, através de opiniões de pessoas que entendem do assunto.
        
        Buscamos sempre a imparcialidade, a honestidade e a transparência ao criarmos nossos conteúdos.</a>
    <br><br>
    <h2>Nosso time</h2>
    <br>
    <a>O Melhor do Café é formado por uma equipe séria, profissional e experiente na área de atuação, com o trabalho de trazer as melhores dicas e conteúdos relacionados à cafés.</a>
    <br><br>

    <h2>Nossa Responsabilidade</h2>
    <br>
    <a>No Melhor do Café, acreditamos que é importante sempre manter uma linha editorial séria, íntegra e transparente. Nosso objetivo é a qualidade da informação em primeiro lugar.</a>
    <br>
    <a> 👉 Quando mencionamos que revisamos um produto, isso significa que passamos horas trabalhando nesse conteúdo.</a>
    <br>
    <a> 👉 Utilizamos especialistas no assunto para escrever ou editar/revisar todo o nosso conteúdo.</a>
    <br>
    <a> 👉Todos os nossos conteúdos são criados com base na experiência real e fontes confiáveis de pesquisa.</a>
    <br>
    <a> 👉 Regularmente atualizamos nossas páginas com informações mais recentes.</a>
    <br>

</div>
</div>

</body>

<footer class="text-center text-lg-start">

    <div class="p-3" style="background-color: #f8f9fa !important;">
      © 2020 Copyright:
      <a class="">Cafeteria.com</a>
    </div>

</footer>

</html>

<script>
    function login(){
        window.location.href = "http://localhost/Cafeteria/view/index.php";
}
</script>