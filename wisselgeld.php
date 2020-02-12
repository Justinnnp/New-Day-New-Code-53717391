<?php


$change = $argv[1];

define("GELDEENHEDEN", array(50, 20, 10, 5, 2, 1));


foreach (GELDEENHEDEN as $geldStuk) {

    while ($change >= $geldStuk) {
        if (floor($change / $geldStuk)) {
            $aantal = floor($change / $geldStuk);
            $change = $change % $geldStuk;
            echo "$aantal x $geldStuk euro ".PHP_EOL;
        }
    }
}
?>
