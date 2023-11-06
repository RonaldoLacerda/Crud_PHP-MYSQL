<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Usuários</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
          <a class="nav-link" href="?page=listar">Listar usuários</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
          include ("connect.php");
          switch (@$_REQUEST["page"]) {
            case 'novo':
              include("novo-usuario.php");
              break;
            case 'listar':
              include("listar-usuario.php");
              break;
            case 'salvar':
              include("salvar-usuario.php");
              break;  
            case 'editar':
                include("editar-usuario.php");
                break;    
            default:
              print "<h1>Bem vindos!</h1>";
              break;
          }
        ?>
      </div>
    </div>
  </div>
      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
