<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resposta</title>
</head>
<body>
  <?php 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
  ?>
  <h1>Bem vindo <?=$nome;?></h1>
  <h2>Confirme seu email <?=$email;?></h2>
  <h2>Confirme sua data de nascimento <?=$nascimento;?></h2>
</body>
</html>