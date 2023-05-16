<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Números</h1>
        <?php 
            $num = $_POST["n"] ?? 0;
            echo "<p>Número Informado: <strong>". number_format($num, 3, ",", ".") ."</strong> </p>";

            $parteInteira = (int)$num;
            $parteFracion = $num - $parteInteira;

            echo "<ul>
                    <li> A parte inteira do número é: <strong>". number_format($parteInteira, 0, ",", ".") ."</strong></li>
                    <li>A parte fracionária do número é: <strong>" .number_format($parteFracion, 3, ",", ".") ."</strong></li>
                </ul>";           

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>    
</body>
</html>