<?php
date_default_timezone_set('Europe/Zagreb');
$danUTjednu = date('N');
$trenutniSat = date('G');
if ($danUTjednu >= 1 && $danUTjednu <= 5) {
    echo "Danas je radni dan.\n";
    if ($trenutniSat >= 8 && $trenutniSat < 16) {
        echo "Trenutno je unutar radnog vremena.\n";
    } else {
        echo "Trenutno je izvan radnog vremena.\n";
    }
} else {
    echo "Danas nije radni dan.\n";
}
?>
