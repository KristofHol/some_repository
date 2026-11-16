<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // uvod, premenne, podmienky, cylky, polia

    //uloha 1 
    /*
    vytvorte cyklus od 50 do -20 vsetky cisla postupnosti 0,5
    vysledok bude 50, 49,5, 49...
    */

    $i=50;
    while($i >= -20){
        echo $i . "," . "<br>";
        $i=$i-0.5;
    }
    ?>
</body>
</html>