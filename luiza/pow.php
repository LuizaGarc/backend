<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potenciação</title>
    </head>

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

<body>
    <div class="pcentral">
        <form action="php/potenciacao.php" method="get">
            <fieldset>
                <legend class="legend">Potenciação</legend>
                <p>Indica multiplicações sucessivas de fatores iguais.</p>
                <label>Digite a base:</label> <br>
                <input type="number" name="base" id="base" class="textbox">
                <br><br>
                <label>Digite o expoente:</label> <br>
                <input type="number" name="expoente" id="expoente" class="textbox">
                <br><br>
                <input type="submit" name="submit" id="submit" class="bot">
            </fieldset>
        </form>
    </div>

    <?php
    if(isset($_GET["base"]) && isset($_GET["expoente"])) {
        $base = $_GET["base"];
        $expoente = $_GET["expoente"];

        $resultado = pow($base, $expoente);

        echo "<p>A base elevada ao expoente é igual a: $resultado</p>";
    }
    ?>

<br>
</body>
</html>