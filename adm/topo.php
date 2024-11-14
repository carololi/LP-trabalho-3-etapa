<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="container-fluid bg-dark text-white link-light ">
        <div class="row">
            <div class="col text-start">
            <div id="cimaheader" class="container-fluid text-light p-2 text-center"> 
              Hoteis
    </div>
            </div>
            <div class="col text-end">
              <?php
                  session_start();
                  if(isset($_SESSION['login'])){
                      $login = $_SESSION['login'];
                      $nome = $_SESSION['nome'];
                      $nivel = $_SESSION['nivel'];

                      echo "Bem vindo, $nome | ";
                      if($nivel == 'adm'){
                        echo "<a href='adm/adm.php'> Admin </a> | ";
                      }
                      echo "<a href='adm/logout.php'> Logout </a>";
                  }else{
                    echo"
                        <a href='adm/login.php'> LOGIN </a> |
                        <a href='usuarios/usuarios.php'> Não Possuo Cadastro </a>
                    ";
                  }
              ?>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">