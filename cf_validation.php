<?php
// Regex per il codice fiscale
$regex = '/^[A-Za-z]{6}[0-9]{2}[A-Za-z]{1}[0-9]{2}[A-Za-z]{1}[0-9]{3}[A-Za-z]{1}$/';

// Codice fiscale da verificare
$codiceFiscale = $_POST["codiceFiscale"];

if (preg_match($regex, $codiceFiscale)) {
    echo "Il codice fiscale è valido.";
} 
else if(strlen($codiceFiscale) < 16) {
    echo "Il codice fiscale è troppo corto.";
}
else {
    echo "Il codice fiscale non è valido.";
}
?>