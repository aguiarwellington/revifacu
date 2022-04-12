<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combustivel</title>
</head>
<body>
    <form action="combustivel.php" method="GET">
        <P>Qual a distancia da sua casa até a da sua irmã? </P>
        <P> Quanto listros seu carro gasta por Km? </P>
        <p>Quanto está a gasolina no seu posto? </p>

        <label>Distancia</label>
            <input type="number" name="dist">
        <label>Consulmo</label>
            <input type="number" name="cons">
        <label>Preço</label>

            <input type="number" name="pre">

        <button >Enviar</button>

        
        <?php

        $dist = $_REQUEST["dist"];

        $cons = $_REQUEST["cons"];

        $pre = $_REQUEST["pre"];

        $total = $dist * $pre / $cons;
        $litros = $dist / $cons;

         

        

        echo "Maria você vai gastar " . $total . " Reais com combustivel, e , seu carro vai gastar " . $litros . " listros" ;

        

        ?>




    </form>
</body>
</html>