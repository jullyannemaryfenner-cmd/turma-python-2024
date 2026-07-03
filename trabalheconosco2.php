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
          <a class="nav-link active" href="trabalheconosco.php">Trabalhe conosco</a>
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
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <h2 class="card-title">Trabalhe conosco</h2>
            <p>Preencha seus dados abaixo para se candidatar.</p>

            <form action="conexao.php" method="post">
              <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
              </div>

              <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
              </div>

              <button type="submit" class="btn btn-primary">Enviar candidatura</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <footer style="text-align: center;" >© copyright lldesenvolvimento</footer> <br>

  </div>
  
  </div>
  
  </body>
</html>