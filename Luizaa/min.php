<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mínimo</title>
    <style>
        body{
            background-color: #d2defc;
            display: flex;
            justify-content: center;
            align-items: center;

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
            <form>
                <fieldset class="fmax">
                    <legend class="lmax"><b>MIN</b></legend>
                    <p class="pmax">A função MIN retorna o valor mínimo de uma lista de valores ou argumentos. A função pede os seguintes dados: MIN(number1, number2, …) [MIN(número1, número2, …)]: · Pode-se especificar argumentos que sejam números, nomes, células, ou matrizes.</p>
                    <label>Valores</label> <br>

                    
                    <input type="number" name="val" id="valjs" class="textboxmin">
                    <br>
                    <br>
                    <input  type="number" name="val1" id="val1js" class="textboxmin">
                    <br>
                    <br>
                    <input type="number" name="val2" id="val2js" class="textboxmin">
                    <br>
                    <br>
                    <input  type="number" name="val3" id="val3js" class="textboxmin">
                    <br>
                    <br>
                    <input  type="number" name="val4" id="val4js" class="textboxmin" >
                    

                    <br><br>
                    <input type="submit" name="submit" id="submit" class="botmax">
                </fieldset>
            </form>
        </div>

        <?php
    $VAL = array($_GET["val"], $_GET["val1"], $_GET["val2"], $_GET["val3"], $_GET["val4"]);
    $menor = min($VAL);
    echo "<p>O menor número é:  " .$menor;
    ?>
</body>
</html>
