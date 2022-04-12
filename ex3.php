<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex3.php" method="GET">
      
   <label>A</label>
   <input type="number" name="a">
   <label>B</label>
   <input type="number" name="b">
   <label>C</label> 
  <input type="number" name="c">
   <button type="submit">Enviar</button>

   

    <?php

    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $c = $_REQUEST["c"];

    $resul = ($a - $b) * $c;

    echo $resul;

    ?>

    </form>
</body>
</html>