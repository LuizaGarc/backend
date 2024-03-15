<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conversão de base</title>
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
<div>
        <form action="" method="get">
            <fieldset>
                <legend class="legend"><b>Conversão de Base</b></legend>
                <p>Essa função converte um número entre bases arbitrárias</p>
                <label>Converte um número octal em um número decimal</label> <br>
                <input type="number" name="otd" id="otdjs" class="textbox">
                <br><br>
                <label >Converte o número octal para um número hexadecimal</label> <br>
                <input type="number" name="octh" id="octhjs" class="textbox">
                <br><br>
                <input type="submit" name="submit" id="submit" class="bot">
            </fieldset>
        </form>

        <?php
        if(isset($_GET["otd"])) {
            $otd = $_GET["otd"];
            echo "<p>O número octal em decimal é: " . base_convert($otd, 8, 10) . "</p>";
        }

        if(isset($_GET["octh"])) {
            $octh = $_GET["octh"];
            echo "<p>O número octal em hexadecimal é: " . base_convert($octh, 8, 16) . "</p>";
        }
        ?>
    </div>
    <br>


</body>
</html>