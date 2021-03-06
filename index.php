<?php 
    require_once('functions/load_page.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <title id="title">Caramelo Doceria</title >
    <script src="js/change_title.js"></script>
</head>
<body>
    <header>
        <a href="index.php">
            <img src="images/logo.png" alt="" class="logo">
        </a>
    </header>
    <nav>
        <div class="container container-nav">
            <a href="index.php" style="margin-right: 15px;" class="nav-link">Home</a>
            <a href="index.php?page=quem_somos" style="margin-right: 100px;" class="nav-link">Quem somos</a>
            <a href="index.php?page=contato" style="margin-left: 100px;" class="nav-link">Contato</a>
            <a href="index.php?page=localizacao" class="nav-link">Localização</a>
        </div>
    </nav>
    <div class="topbar"></div>
    <div class="content">
        <div class="container">
            <?php load_page();?>
        </div>
    </div>
    <div class="bottombar"></div>
    <footer>
        <div class="container container-footer">
            <strong>Nome:</strong> Maicon Kistemmacher<br/>
            <strong>RA:</strong> 20013550-5
        </div>
        <div class="container container-footer">
            <strong>Disciplina:</strong> Back End I 53/2021 <br/>
            <strong>Curso:</strong> Sistemas para Internet            
        </div>
    </footer>
</body>
</html>