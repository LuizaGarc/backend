<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mínimo</title>
<style>


body{
    background: linear-gradient(to bottom, #778491, #2c4858); /* Fundo gradient */
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

    </head>
<body>
<div class="pcentral">
        <form action="php/abs.php" method="get">
            <fieldset>
                <legend class="legend">ABS</legend>
                <p> Retorna o valor absoluto de um número. Esse valor é o número sem o seu sinal.</p>
                <label>Digite um número real.</label> <br>
                <input type="number" name="abs" id="idadejs" class="textbox">
                <br><br>
                <input type="submit" name="submit" id="submit" class="bot">
            </fieldset>
        </form>
    </div>

<?php
echo "<p>O valor de pi é: " .M_PI;
?>
<br>
</body>
</html>