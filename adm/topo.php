<?php
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discografia Virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="container-fluid bg-danger text-light p-2 text-center"> 
        Discografia Virtual
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" style="margin-left: 10px;" href="">70's Hits</a>
      ...
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav me-auto">
          <!-- Itens adicionais do menu-->
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-danger" type="submit">Pesquisar</button>
        </form>
        <div class="text-white ms-3">
          <?php
              if(isset($_SESSION['login'])){
                  $login = $_SESSION['login'];
                  $nome = $_SESSION['nome'];
                  $nivel = $_SESSION['nivel'];

                  echo "Bem-vindo, $nome | ";
                  if($nivel == 'adm'){
                    echo "<a href='../adm/adm.php' class='text-light'  style'text-decoration: none;'>Admin</a> | ";
                  }
                  echo "<a href='/19 - Gabriel Lopes Pitz/adm/logout.php' class='text-light' style'text-decoration: none;'>Logout</a>";
              } else {
                echo "
                    <a href='/19 - Gabriel Lopes Pitz/adm/login.php' class='text-light'>LOGIN</a> |
                    <a href='/19 - Gabriel Lopes Pitz/usuarios/usuarios.php' class='text-light'>Não Possuo Cadastro</a>
                ";
              }
          ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </div>
      </div>
    </nav>
