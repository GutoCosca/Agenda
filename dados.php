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

        /* endereço residencial*/
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
        
        /* endereço comercial*/
        $empresa = $_GET ["empresa"];
        $telCom01 = $_GET ['telCom01'];
        $telCom02 = $_GET ["telCom02"];
        $ramalCom = $_GET ["ramalCom"];
        $celCom = $_GET ["celCom"];
        $emailCom = $_GET ["emailCom"];
        $endCom =$_GET ["endCom"];
        $numeroCom = $_GET ["numeroCom"];
        $complementoCom = $_GET ["complementoCom"];
        $bairroCom = $_GET ["bairroCom"];
        $cepCom = $_GET ["cepCom"];
        $cidadeCom = $_GET ["cidadeCom"];
        $ufCom = $_GET ["ufCom"];

    ?>
</body>
</html>