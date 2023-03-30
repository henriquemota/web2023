<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulários em PHP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <form action='https://www.google.com/search' target='_blank'>
    <input type="search" name='q'>
    <button type="submit">
      <i class="fa fa-search"></i>
      pesquisar
    </button>
  </form>

  <form action="">
    <div>
      <label for="nome">Informe seu nome</label>
      <input 
      type="text" 
      name="nome" 
      id="nome" 
      required 
      />
    </div>
    
    <button type="submit">
      <i class="fa fa-user"></i>
      Enviar
    </button>
  </form>
  <?php if (isset($_GET['nome'])) echo("<h1>Bem vindo " . $_GET['nome'] . "</h1>"); ?>
  
</body>
</html>