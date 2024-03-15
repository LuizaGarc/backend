<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Máximo</title>
    <style>
        body {
            background: linear-gradient(to bottom, #778491, #2c4858); /* Fundo gradient */
            display: flex;
            justify-content: center; 
            align-items: center; 
            flex-direction: column;
            height: 100vh; 
            margin: 0;
        }
        p {
            font-family: Montserrat;
            color: black;
            font-weight: bold;
            text-align: center;
            font-size: 40px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="get">
            <fieldset class="fmax">
                <legend class="lmax"><b>MAX</b></legend>
                <p class="pmax">Max() retorna o parâmetro considerado o "maior" de acordo com as comparações padrões. Se vários valores de tipos diferentes forem considerados iguais (por exemplo, 0 e 'abc') então o primeiro fornecido à função será retornado. </p>
                <label>Valores</label> <br>

                <input type="number" name="val" class="textboxmax">
                <br><br>
                <input type="number" name="val1" class="textboxmax">
                <br><br>
                <input type="number" name="val2" class="textboxmax">
                <br><br>
                <input type="number" name="val3" class="textboxmax">
                <br><br>
                <input type="number" name="val4" class="textboxmax">
                <br><br>

                <input type="submit" name="submit" class="botmax">
            </fieldset>
        </form>
    </div>

    <br>
    <?php
    if(isset($_GET["val"]) && isset($_GET["val1"]) && isset($_GET["val2"]) && isset($_GET["val3"]) && isset($_GET["val4"])) {
        $VAL = array($_GET["val"], $_GET["val1"], $_GET["val2"], $_GET["val3"], $_GET["val4"]);
        $maior = max($VAL);
        echo "<p>O maior número é: $maior</p>";
    }
    ?>
</body>
</html>