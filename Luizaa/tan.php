<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangente</title>

    </head>
    <style>


body{
    background-color: #d2defc;
    background-color: ;
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

$val = $_GET["val"];;
echo"<p>A tangente do número digitado é igual à: ".(tan($val));
?>

<br>

</body>
</html>