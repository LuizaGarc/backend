<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hipotenusa</title>
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
            margin-top: 40px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="pcentral1">
        <form action="" method="get">
            <fieldset>
                <legend class="legend"><b>HIPOTENUSA</b></legend>
                <p>O teorema de Pitágoras diz que o quadrado da hipotenusa é igual à soma dos quadrados dos catetos: a² = b² + c², onde: a é a hipotenusa, b é o cateto 1 e c é o cateto 2.</p>
                <label>Informe o valor do cateto 1</label> <br>
                <input type="number" name="cat1" id="cat1" class="textbox">
                <br><br>
                <label>Informe o valor do cateto 2</label> <br>
                <input type="number" name="cat2" id="cat2" class="textbox">
                <br><br>
                <input type="submit" name="submit" id="submit" class="bot">
            </fieldset>
        </form>

        <?php
        if(isset($_GET["cat1"]) && isset($_GET["cat2"])) {
            $cat1 = $_GET["cat1"];
            $cat2 = $_GET["cat2"];
            $hipotenusa = hypot($cat1, $cat2);
            echo "<p>O valor da hipotenusa é: $hipotenusa</p>";
        }
        ?>
    </div>
    <br>
</body>
</html>