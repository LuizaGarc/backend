<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Máximo</title>
    <style>
        body{
            background-color: #d2defc;
            display: flex;
            justify-content: center;
            align-items; center;

        }
        p{
            font-family: Montserrat;
            color: black;
            font-weight: bold;
            text-align: center;
            font-size: 40px;
            margin-top: 40px
        }
    </style>
</head>
<body>
<div>
            <form action="php/max.php" method="get">
                <fieldset class="fmax">
                    <legend class="lmax"><b>MAX</b></legend>
                    <p class="pmax">Max() retorna o parâmetro considerado o "maior" de acordo com as comparações padrões. Se vários valores de tipos diferentes forem considerados iguais (por exemplo, 0 e 'abc') então o primeiro fornecido à função será retornado. </p>
                    <label>Valores</label> <br>

                    <input type="number" name="val" id="valjs" class="textboxmax">
                    <br><br>
                    <input type="number" name="val1" id="valjs" class="textboxmax">
                    <br><br>
                    <input type="number" name="val2" id="valjs" class="textboxmax">
                    <br><br>
                    <input type="number" name="val3" id="valjs" class="textboxmax">
                    <br><br>
                    <input type="number" name="val4" id="valjs" class="textboxmax">
                    <br><br>

                    <input type="submit" name="submit" id="submit" class="botmax">
                </fieldset>
            </form>
        </div>

        <br>
    <?php
    $VAL = array($_GET["val"], $_GET["val1"], $_GET["val2"], $_GET["val3"], $_GET["val4"]);
    $maior = max($VAL);
    echo "<p>O maior número é:  " .$maior;
    ?>
</body>
</html>