<?php
// Funzione per troncare una stringa al primo spazio
function truncateToFirstSpace($value) {
    return explode(' ', $value)[0];
}