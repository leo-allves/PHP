<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cauculo Aritmético</title>
</head>
<body>
    <?php
        $nota1 = 8;
        $nota2 = 9;
        $nota3 = 0;

        $soma = (($nota1 + $nota2 + $nota3)/ 3);

        if ($soma <=6) {
            echo "Você está de recupercão sua nota foi de: ".$soma;
        }
        else {
            echo "Você foi aprovado parabéns sua nota foi de: ".$soma;
        }
    ?>
</body>
</html>


