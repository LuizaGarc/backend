<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Divisão</title>
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
            <form action="php/intdiv.php" method="get">
                <fieldset>
                    <legend class="legend"><b>INTDIV</b></legend>
                    <p>A nova função intdiv() realiza a divisão de inteiros de seus operandos e a retorna.</p>
                    <label>Dividendo</label> <br>
                    <input type="number" name="did" id="didjs" class="textbox">
                    <br><br>
                    <label >Divisor</label> <br>
                    <input type="number" name="div" id="js" class="textbox">
                    <br><br>
                    <input type="submit" name="submit" id="submit" class="bot">
                </fieldset>
            </form>
        </div>

        
    <?php

    $dividend = $_GET["div"];
    $divisor = $_GET["div"];

    echo "<p>A divisão dos números retornando um inteiro é igual à: " .intdiv($dividend, $divisor);
    ?>
</body>
</html>