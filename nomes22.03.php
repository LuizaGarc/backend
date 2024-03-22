<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $alunos=["Luiz", "Vermeio", "Klein"];
    echo "<pre>";
    echo var_dump($alunos);/*o var_dump imprime o tipo e o valor, retorna uma string */
    echo "<br>";
    print_r($alunos);

    $clientes=["Gabriel", 39, 1.92, true];
    print_r($clientes);/*o print_r consequente, consequencia na variável */
    echo var_dump($clientes);

    $cursos = [];
    $cursos[0]= "Desenvlvimento de Sistemas";/*começa sempre no 0 */
    $cursos[1]= "Informática";
    $cursos[4]= "Eletro";
    print_r($cursos );

    echo "<h1> Funções para vetores</h1> <br>";
    echo "Escrevendo depois do array push <br>";
    array_push($alunos, "Luiza", "Erick");/*array push para add depois(posição 3 e 4)*/
    print_r($alunos);

    echo "Adicionando antes array unshift <br>";
    array_unshift($alunos, "André", "Eduardo");
    print_r($alunos);

    echo "Apagando o último índice do vetor";
    array_shift($alunos);
    print_r($alunos);

    echo "Contando os elementos <br>";
    echo count($alunos);/*conta o numero de variaveis(6 no exemplo) */
    $qtd_alunos = count($alunos);/*faz a mesma coisa, mas em uma variável */
    echo "<br> Quantidade de alunos com variável $qtd_alunos <br><br>";

    echo "Ordenando o maior para o menor";/*Por ordem alfabética */
    sort($alunos);
    print_r($alunos);

    echo "Ordenando o menor para o maior";/*Por ordem alfabética */
    rsort($alunos);
    print_r($alunos);

    echo "</pre>";

    $qtd = count($alunos);
    for ($i=0; $i < $qtd_alunos; $i++){
        echo "$alunos[$i]<br>";
    }
    echo "<br>-------- <br>";
    foreach ($alunos as $indice => $aluno){
        echo "$indice : $aluno <br>";/*ambos (for e foreach), fazem, a mesma função mas de diferentes formas */
    }

    ?>
</body>
</html>