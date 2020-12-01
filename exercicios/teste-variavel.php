<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Pratico (Variáveis)</title>
</head>
<body>
    <?php

        $lista = [
            'nome' => 'Leonardo',
            'idade' => 28,
            'atributos' => [
                'forca' => 60,
                'agilidade' => 80,
                'destreza' => 50
            ],
            'vida' => 1000,
            'mana' => 928
        ];

        echo "NOME: ".$lista['nome']."<br/>";
        echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
        echo "VIDA: ".$lista['vida'];

    ?>
</body>
</html>