<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <h2>Programação Orientada a Objeto</h2>
    <?php/*
    //ter essas 3 variaveis pra cada usuario
    $numeroConta = "12345-0";
    $titular = "Democrito Silva";
    $saldo = "1500";

    $valor = 500;



    if($valor <= $saldo){
        $saldo = $saldo -$valor;
        echo "Saque realizado!";
    }else{
        echo "Saque insuficiente!";
    }


*/
require_once 'class/conta.class.php';

$conta1 = new Conta("1234", "João", 1000);
echo "Titular" . $conta1->getTitular();

?>
</body>
</html>