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
        $altura = 1.80;
        $peso = 90;

        $resultado = $peso/($altura*$altura);

        echo "Seu IMC e : ".$resultado;


    ?>
</body>
</html>