<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada</title>
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
    <div class="pcentral">
        <form action="" method="get">
            <fieldset>
                <legend class="legend">Raiz Quadrada</legend>
                <p>Se trata da operação inversa da potenciação.</p>
                <label>Digite o número para calcular a raiz quadrada:</label> <br>
                <input type="number" step="any" name="val" id="val" class="textbox">
                <br><br>
                <input type="submit" name="submit" id="submit" class="bot">
            </fieldset>
        </form>
    
    <?php
    if(isset($_GET["val"])) {
        $val = $_GET["val"];
        $raiz_quadrada = sqrt($val);
        echo "<p>A raiz quadrada do número digitado é igual a: $raiz_quadrada</p>";
    } else {
        echo "<p>Nenhum valor foi fornecido para calcular a raiz quadrada.</p>";
    }
    ?>
    </div>
</body>
</html>