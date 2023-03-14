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
        $numero = 12;
        $numero2 = 12;


        if($numero>$numero2){
            echo "Este e o maior número: ".$numero;

        }else if($numero<$numero2){

            echo "Este e o maior número: ".$numero2;
        }else {
            echo "Os números são iguais: " .$numero;
            
        }
    ?>
</body>
</html>