<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Inicio </title>
    <link rel="icon" type="image/x-icon" href="hack.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- mudar background direto sem chamar outro documento css
  <style>
 body {
  background-color: lightblue;
}
   -->
  </style>
  </head>
  <body>
  <!-- Conexão bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <!-- Navbar do cabeçalho -->
 
 <nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid" >
  
    <a class="navbar-brand" href="index.php" target="new" style="a:hover:background-color:blue;">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="quemsomos.php">Quem somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="trabalheconosco2.php">Trabalhe conosco</a>
        </li>
		
        <li class="nav-item dropdown">
		
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais +
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://sul21.com.br/noticias/politica/eleicoes-2024/2024/10/eleicoes-2024-acompanhe-a-apuracao-do-tse-em-tempo-real/">Cursos</a></li>
            <li><a class="dropdown-item" href="#">Dowloads APP's</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Fórum</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-enable="true"></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div style="width:90%; background: linear-gradient(to top, #ccffcc 0%, #ccffff 100%); margin-left:5%; ">


  <!-- Inicio do carrocel -->
  
  <div id="carouselExampleIndicators" class="carousel slide" style="margin: 0 auto; max-width: 1200px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 700px;">
      <img src="banner1.jpg" class="img-fluid" alt="...">
    </div>
    <div class="carousel-item" style="height: 700px;">
      <img src="banner2.jpg" class="img-fluid" alt="...">
    </div>
    <div class="carousel-item" style="height: 700px;">
      <img src="banner3.jpg" class="img-fluid" alt="...">
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
  <!-- Conteudo dentro de um container pra facilitar os ajustes -->
  
  <div class="container">
  
  <!-- Card Artigos -->
  
  <div class="container">
  
  <div class="row justify-content-center" style="width: 1200px; margin-left:35px;"> <!-- Adicionar centralização -->
    <div class="col-md-4">
      <div class="card" style="height: 100%;"> <!-- Ajustar de altura -->
        <img src="card1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Como comprar seguro na internet</h5>
          <p class="card-text">Veja a matéria preparada por nossos alunos<br> para se proteger de golpes na internet</p>
          <a href="#" class="btn btn-primary">LER</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="height: 100%;">
        <img src="card2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ranking de melhores antivírus 2024</h5>
          <p class="card-text">Separamos uma lista dos melhores antivírus pagos e gratuitos de 2024</p>
          <a href="#" class="btn btn-primary">LER</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="height: 100%;">
        <img src="card3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Porquê é importante fazer um PENTEST em minha empresa?</h5>
          <p class="card-text">Neste artigo fizemos uma abordagem técnica,<br> da importância de realizar Pentest com regularidade na empresa</p>
          <a href="#" class="btn btn-primary">LER</a>
        </div>
      </div>
    </div>
  </div>
</div>
  
</div>
   <br>
   <br>
	<div style="background-color:#e6f9ff;">
  <h1 style="text-align:center; color:#ff4d4d; padding-top:20px; font-family:impact; font-size:100px;"> Motivos pra comprar nosso curso! </h1> <br>
	</div> <br>
  <video width="450" height="480" controls style="display:block; margin: 0 auto; border:solid 2px; color:black;">
  <source src="compraocurso.mp4" type="video/mp4">
  <source src="compraocurso.mp4" type="video/ogg">
	Your browser does not support the video tag.
  </video>
  <br>
  <p style="text-align: center;">
  <a href="https://www.w3schools.com" target="newtab" style="text-decoration:none;">Visit W3Schools</a></p>
  
  <style>
* {
  box-sizing: border-box;
}

.menu {
  float: left;
  width: 20%;
  text-align: center;
}

.menu a {
  background-color: #e5e5e5;
  padding: 8px;
  margin-top: 7px;
  display: block;
  width: 100%;
  color: black;
}

.main {
  float: left;
  width: 60%;
  padding: 0 20px;
}

.right {
  background-color: #e5e5e5;
  float: left;
  width: 20%;
  padding: 15px;
  margin-top: 7px;
  text-align: center;
}

@media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;color:#aaaaaa;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1>Hello World</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <a href="#">Link 4</a>
  </div>

  <div class="main">
    <h2>Lorum Ipsum</h2>
    <p><del>texto riscado? </del>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
  </div>

  <div class="right">
    <h2>About</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
  </div>
</div>

<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">

  <footer style="text-align: center;">© copyright lldesenvolvimento</footer> <br>

  </div>
  
  </div>
  
  </body>
</html>