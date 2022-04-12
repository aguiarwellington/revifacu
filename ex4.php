<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex4.php" method="GET">
        


     <label>Anos fumando</label>
            <input type="number" name="anos"> 
    <label>Cigarros fumados por dia</label>
            <input type="number" name="cigarros">
     <label>Preço da carteira</label>
            <input type="float" name="valor">   


    <button type="submit">Enviar</button>


<?php

$anos = $_REQUEST["anos"];
$valor = $_REQUEST["valor"];
$cigarros = $_REQUEST["cigarros"];

$anos = $anos * 365;
$cigarros = $cigarros * $anos;

$total = $valor * ($cigarros / 20);

echo $total;


?>

    </form>
</body>
</html>