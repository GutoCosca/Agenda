<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php
        $nome = $_GET ["nome"];
        $sobrenome = $_GET ["sobrenome"];
        $natal = $_GET ["natal"];
        $tel01 = $_GET ['tel01'];
        $tel02 = $_GET ["tel02"];
        $cel = $_GET ["cel"];
        $email = $_GET ["email"];
        $endResid = $_GET ["endResid"];
        $numero = $_GET ["numero"];
        $complemento = $_GET ["complemento"];
        $bairro = $_GET ["bairro"];
        $cep = $_GET ["cep"];
        $cidade = $_GET ["cidade"];
        $uf = $_GET ["uf"];
        echo "Meu nome é $nome $sobrenome, nasci em $natal tel01 $tel01, tel02 $tel02, Celular $cel, e-mail $email end $endResid, $numero - $complemento, Bairro: $bairro - CEP: $cep - Cidade: $cidade - UF: $uf";
    ?>
</body>
</html>