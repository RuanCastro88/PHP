<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula 03/05</title>

</head>

<body>



    <?php

    $prova1 = 2;

    $prova2 = 2;

    $prova3 = 1;

    $media = (($prova1*1) + ($prova2*2) + ($prova3*3))/6;

    if ($media<3)

    $desempenho = "pifio";

    elseif ($media < 7)

    $desempenho = "medio";

    elseif ($media < 9)

    $desempenho = "bom";

    else

    $desempenho = "otimo";



    echo "<h1>Desenpenho</h1>";

    echo "Seu desempenho foi $desempenho.";



    ?>



</body>

</html>