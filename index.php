<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Paulo</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="script.js" defer></script>
   <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>



  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        
        <a class="navbar-brand" href="index.php?pg=home">
        <img class="navbarimg" src="img/steamverde.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item1">
              <a class="nav-link active" aria-current="page" href="index.php?pg=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?pg=jogos">Jogos</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Opções
              </a>      
        <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php?pg=contato">Contato</a></li>
                <li><a class="dropdown-item" href="index.php?pg=equipe">Equipe</a></li>
                <li>
                  
              </ul>

            </li>
          </ul>

        </div>
      </div>
    </nav>


  </header>
  <main>
    <?php
    
    
    $pg = $_GET["pg"] ?? "home";
    $pg = "paginas/{$pg}.php";
    if (file_exists($pg)) {
      include $pg;
    } else {
      include "paginas/erro.php";
    }

    ?>
  </main>
  <footer class="footer">
    <p>Todos os direitos reservados | Desenvolvido por Paulo Vendramini</p>
    
    <a href="https://wa.me/5544998246730">
    <ion-icon name="logo-whatsapp" size="large"></ion-icon>
  </a>
  <a href="">
    <ion-icon name="logo-tiktok" size="large"></ion-icon>
  </a>
  <a href="">
    <ion-icon name="logo-discord" size="large"></ion-icon>
  </a>
    <a href="https://github.com/paulogabrielv">
    <ion-icon name="logo-github" size="large"></ion-icon>
  </a>
  <a href="https://www.instagram.com/paulovendraminii?igsh=aHQ4bmpoNDY5M3Ry">
    <ion-icon name="logo-instagram" size="large"></ion-icon>
</a>

  </footer>

</body>

</html>