<?php
    require_once("./src/app/utils/globals.php");
    require_once("./src/app/configs/database.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStart</title>
    <link rel="shortcut icon" href="./public_html/assets/images/moviestar.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.css" integrity="sha512-h1rwF0uB6r2IuEZcyjPrR53bBKN9Wb4yL+w3Rdlzmc3CkBF1gMSFvQIIstnu4bEtYDaKca5ke5S8UBAACRImyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public_html/css/styles.css">
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="/" class="navbar-brand">
                <img src="./public/assets/images/logo.svg" alt="MovieStar" id="logo">
                <span id="moviestar-title">MovieStar</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="search" name="q" id="search" class="form control mr-sm-2" placeholder="Buscar Filmes" aria-label="Search">
                <button type="submit" class="btn my-2 my-sm-0"><i class="fas fa-search"></i></button>
            </form>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?php echo $BASE_URL . 'auth.php'?>" class="nav-link">Entrar / Cadastrar</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container-fluid" id="main-container">
        <h1>Corpo do site</h1>
    </div>

    <footer id="footer">
        <div class="social-container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div id="footer-links-container">
            <ul>
                <li><a href="">Adicionar Filme</a></li>
                <li><a href="">Adicionar Crítica</a></li>
                <li><a href="">Entrar / Registrar</a></li>
            </ul>
        </div>
        <p>&copy; 2022</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.js" integrity="sha512-39Q5Yw4jtWPVkYu5Dry3HiRh6DWG4FDODb/rHF+X2Xp0kzhg9VgTyYV209uQ/EsqPDP/4dDvwm1rb8JgnAkHNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>