<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karty a cykly</title>
</head>
<body>
    <?php
    /*
    Cyklus - časť kódu, ktorá sa opakuje
    Typy cyklov: for, while, do while, foreach

    for - je typ cyklu, pri ktorom poznáme počet opakovaní
    while - je typ cyklu, ktorý sa opakuje pokiaľ je splnená podmienka
    do while - je typ cyklu, ktorý sa opakuje pokiaľ je splnená podmienka, alespoň raz sa vykoná- Podmienka sa skontroluje na konci cyklu.
    foreach - je typ cyklu, ktorý prechádza hodnoty polí

    */

    $hodnoty = array_merge(range(2, 10), array("J", "Q", "K", "A"));
    $znaky = array("♥", "♠", "♣", "♦");
    $balicek = array();

    foreach ($hodnoty as $hodnota) {
        foreach ($znaky as $znak) {
            $balicek[] = $hodnota . $znak;
        }
    }

    shuffle($balicek);

    for ($i = 0; $i <= 6; $i++) {
        echo "<p><strong>Hráč " . ($i + 1) . ":</strong> ";

        for ($karta = 0; $karta < 2; $karta++) {
            echo array_pop($balicek) . " ";
        }

        echo "</p>";
    }

    //$mena = array("Peter", "Ján", "Lukáš");


    ?>
</body>
</html>