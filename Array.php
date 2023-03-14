<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <?php
    $soma =0;
       $notas = array(10,7,8,5,6,4);
            for($i =0; $i<count($notas);$i++){

                $soma =$notas[$i] + $soma;


            }
           $soma= $soma/count($notas);
           $resumo = number_format($soma,1); 
            echo "Esta e sua média ".$resumo;
                
    ?>
</body>
</html>