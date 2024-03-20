<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
    <label for="inicio"> Digite o valor inicial</label>
    <input name="inicio" type="number"><br>
    <label for="final"> Digite o valor final</label>
    <input name="final" type= "number"><br>
    <button type="submit">Enviar</button>
  </form>
<?php
  $inicio = $_GET ["inicio"];
  $final = $_GET ["final"];
  for ($inicio; $inicio != $final ; $inicio++){
    echo "$inicio <br>";
  }
?>
</body>
</html>