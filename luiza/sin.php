<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Seno</title>
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
        <form action="" method="get">
            <fieldset>
                <legend class="legend">Cálculo do Seno</legend>
                <p>É a razão entre o cateto oposto e a hipotenusa.</p>
                <label>Digite o ângulo:</label> <br>
                <input type="number" step="any" name="angulo" id="angulo" class="textbox">
                <br><br>
                <input type="submit" name="submit" id="submit" class="bot">
            </fieldset>
        </form>
    </div>

    <?php
    if(isset($_GET["angulo"])) {
        $angulo = $_GET["angulo"];
        $seno = sin($angulo);

        echo "<p>O seno do ângulo é: $seno</p>";
    }
    ?>
</body>
</html>