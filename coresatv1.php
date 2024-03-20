<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP cores</title>
</head>
<body>
  <form actions="<?php echo var_dump($_SERVER['PHP_SELF']);?>" method="get">
      <label for="">Informe a cor</label>
      <input type="text" name="cor">
      <input type="submit" value="enviar">
  </form>
<?php
  if(issets($_GET["cor"])) {
    $cor = $_GET["cor"];
    if($cor == "amarelo"){
      echo "O preço do jogo é R$50,00";
    }
    else if ($cor =="azul"){
      echo "O preço do jogo é R$100,00";
    }
    elseif ($cor =="verde"){
      echo "O preço do jogo é R$150,00";
    }
    else{
      echo "Cor inválida";
    }

  }
  ?>
</body>
</html>
