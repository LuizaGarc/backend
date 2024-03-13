<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potenciação</title>
    </head>

    <style>
body{
    background-color: #d2defc;
    display: flex;
    justify-content: center; 
    align-items: center; 
    flex-direction: column;
    height: 100vh; 
    margin: 0;
}

p{
    font-family: Montserrat;
    color: black;
    font-weight: bold;
    text-align: center;
    font-size: 40px;
    margin-top: 50px;
}

</style>

<body>


<?php

$BASE = $_GET["val"];
$EXPOENTE = $_GET["val1"];

echo"<p>A base digitada elevada à potência digitada é igual à: ".(pow($BASE, $EXPOENTE));
?>
<br>
</body>
</html>