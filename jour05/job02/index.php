<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction avec true
bonjour(true);  

// Appel de la fonction avec false
bonjour(false); 
?>
