
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form action="ex2.php" method="GET">
    <label>Tabuada: digite um número</label>
    <input type="number" name="num">
    <button type="submit">Enviar</button>

    <?php
       
      @ $num = $_REQUEST["num"];
    for ($tab = 1; $tab<=10; $tab++){

        $total = $tab * $num;
    print "<br>";

        echo "$tab X $num = $total <br>";

    }
      
    ?>
    
 </form>

</body>
</html>