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
        // Laço de repetição FOR em PHP
        // Imprime os valores de 1 ao 10 em uma página web

        for($numero=0; $numero<=10; $numero++){
            echo $numero . "<br>";
        }

        /* Desenvolva um script em PHP que exiba no navegador números ímpares de 0 até 100 utilizando a estrutura de repetição FOR */
        /* Entregar via link do Github no site meucodigoaluno.com.br */

        for($numeroimpar = 0; $numeroimpar<=100; $numeroimpar++){
            if($numeroimpar % 2 == 1){
                echo $numeroimpar . "<br>";
            }
        }
        ?>
    </body>
</html>