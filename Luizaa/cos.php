<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cossenot</title>
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
            <form action="php/cos.php" method="get">
                <fieldset>
                    <legend class="legend"><b>COS</b></legend>
                    <p>O cosseno de um ângulo é a razão entre a medida do cateto adjacente e a medida da hipotenusa. Razão do cosseno.</p>
                    <label>Digite um número</label>
                    <input type="number" name="val" id="valjs" class="textbox">
                    <br><br>
                    <input type="submit" name="submit" id="submit" class="bot">
                </fieldset>
            </form>
        </div>


        
        <?php
    $cos= $_GET["val"];
    echo"<p>O cosseno do número é:  " .(cos($val));


    ?>
</body>
</html>