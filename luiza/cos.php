<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cossenot</title>
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
            margin-top: 40px
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="get">
            <fieldset>
                <legend class="legend"><b>COS</b></legend>
                <p>O cosseno de um ângulo é a razão entre a medida do cateto adjacente e a medida da hipotenusa. Razão do cosseno.</p>
                <label>Digite um número</label>
                <input type="number" name="val" id="valjs" class="textbox">
                <br><br>
                <input type="submit" name="submit" id="submit" class="bot">
            </fieldset>
        </form>
    

    <?php
    if(isset($_GET["val"])) {
        $angulo_graus = $_GET["val"];
        $angulo_radianos = deg2rad($angulo_graus);
        $cosseno = cos($angulo_radianos);
        echo "<p>O cosseno do ângulo é: $cosseno</p>";
    } else {
        echo "<p>Nenhum valor foi fornecido para calcular o cosseno.</p>";
    }
    ?>
    </div>
</body>

</body>
</html>