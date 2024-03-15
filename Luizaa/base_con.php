<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conversão de base</title>
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
            margin-top: 40px;
            display: flex;
            flex-direction: column;
        }
    </style>


</head>
<body>
<div>
    
            <form action=" " method="get">
                <fieldset>
                    <legend class="legend"><b>BASE CONVERT</b></legend>
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
        </div>


    <?php
    
    $oct = $_GET["otd"];
    echo "<p> O número octal em decimal é: </p>" . base_convert($oct,8,10);
    
    $hex = $_GET["octh"];
    echo "<p> O número octal em hexadecimal é:  </p>" . base_convert($hex, 16,8);

    ?>
    <br>


</body>
</html>
