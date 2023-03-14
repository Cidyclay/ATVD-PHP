<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir menor elemento</title>
</head>

<body>
    <?php
        $array = [12,1,4,5,21,45,1,74,5,21];
            $maior = $array [0];
            $menor = $array[0];
             for($i =0; $i<count($array);$i++){
                if($array[$i]>$maior){
                    $maior = $array[$i];

                }if($array[$i]<$menor){
                    $menor = $array[$i];
                }

             }
                echo "Este e o maior: ".$maior."  Este e o menor: ".$menor
    ?>
</body>
</html>