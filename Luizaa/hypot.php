<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hipotenusa<title>
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
            margin-top; 40px;
        }
    </style>


</head>
<body>
<div class="pcentral1">
            <form action="php/hi.php" method="get">
                <fieldset>
                    <legend class="legend"><b>HIPOTENUSA</b></legend>
                    <p> O teorema de Pitágoras diz que o quadrado da hipotenusa é igual à soma dos quadrados dos catetos.
                        a2 = b2 + c2 onde: a é hipotenusa, b cateto1 e c cateto2</p>
                    <label>informe cateto1 </label> <br>
                    <input type="number" name="cat1" id="idadejs" class="textbox">
                    <br><br>
                    <label >informe cateto 2 </label> <br>
                    <input type="number" name="cat2" id="idadejs" class="textbox">
                    <br><br>
                    <input type="submit" name="submit" id="submit" class="bot">
                </fieldset>
            </form>
        </div>


    <?php
    $cat1 = $_GET["cat1"];
    $cat2 = $_GET["cat2"];
    echo "<p> O valor da hipotenusa é:  " .hypot($cat1, $cat2);
    ?>
    <br>
    

</body>
</html>