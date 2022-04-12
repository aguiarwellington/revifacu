
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1</title>
</head>
<body>
    <form action="ex1.php" method="GET">
        <label>Primeiro número</label>
            <input type="number" name="num">
        <label>Segundo número</label>
            <input type="number" name="num2">
        <button type="submit">Enviar</button>        
             
        <?php


            $num = $_REQUEST["num"];
            $num2 = $_REQUEST["num2"];

            $som = $num + $num2;

            if($som > 20){
                $add = $som + 8;
                echo $add;
            } else{
                if($som <= 20){
                    $add = $som -5;
                    echo $add;
                }
            }  



        ?>

    </form>
</body>
</html>