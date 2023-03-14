<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero primo</title>
</head>

<body>
    <?php
        $numero = 3;
        $cont = 0;
        for($i =2; $i<$numero;$i++){

            if($numero%$i==0){
                $cont++;
            }
        } if($cont==0){
            echo"Este número e primo: ".$numero;
        }else{
            echo "Este número não e primo : ".$numero;
        }
        


    ?>
</body>
</html>