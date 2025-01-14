<?php
function isPrime($number) {
    if ($number < 2) {
        return false; // Les nombres inférieurs à 2 ne sont pas premiers
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // Si divisible, ce n'est pas un nombre premier
        }
    }
    return true; // Le nombre est premier
}

for ($i = 2; $i <= 1000; $i++) {
    if (isPrime($i)) {
        echo "$i<br>";
    }
}
?>
