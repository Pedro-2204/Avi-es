<?php 
  if(isset($_GET['metodo'])){
    $metodo = $_GET['metodo'];
    $acao = 'recuperarMedico';
    $id = $_GET['id'];

    require_once 'controller/medico.controller.php';
    foreach ($medico as $indice => $medico){
      $id = $medico->id;
      $nome = $medico->nome;
      $email = $medico->email;
      $senha = $medico->senha;
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form name="form" action="medico.controller.php?acao=<?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?>" method="POST">
        <div class="mb-3">
          <label for="" class="form-label">Nome</label>
          <input type="text" class="form-control" name="nome" id="" value="<?php if(isset($nome)){echo $nome;}else{echo '';}?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="email" id="" value="<?php if(isset($email)){echo $email;}else{echo '';}?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="senha" class="form-control" id="exampleInputPassword1" value="<?php if(isset($senha)){echo $senha;}else{echo '';}?>">
        </div>
        <input type="hidden" name="id" value="<?php if(isset($id)){echo $id;}else{echo '';} ?>">
        <button type="submit" class="btn btn-primary"><?php if(!isset($metodo)){echo 'inserir';}elseif($metodo=='alterar'){echo 'alterar';}else{echo 'remover';}?></button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>