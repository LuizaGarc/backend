<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangente</title>
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
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="get">
            <fieldset>
                <legend class="legend"><b>Conversão de Base</b></legend>
                <p>Essa função converte um número entre bases arbitrárias</p>
                <label>Digite um ângulo em radianos:</label> <br>
                <input type="number" name="angulo" id="angulo" class="textbox">
                <br><br>
                <input type="submit" name="submit" id="submit" class="bot">
            </fieldset>
        </form>
    </div>

    <?php
    if(isset($_GET["angulo"])) {
        $angulo = $_GET["angulo"];
        $tangente = tan($angulo);

        echo "<p>A tangente do ângulo é: $tangente</p>";
    }
    ?>
</body>
</html>