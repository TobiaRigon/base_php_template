<?php
// Funzione per scrivere messaggi nei file di log
function logger($logFile, $message) {
    // Formatta il messaggio di log con timestamp
    $timestamp = date("Y-m-d H:i:s");
    $formattedMessage = "[$timestamp] $message" . PHP_EOL;

    // Tenta di scrivere nel file di log
    if (!file_put_contents($logFile, $formattedMessage, FILE_APPEND)) {
        error_log("Impossibile scrivere nel file di log: $logFile");
    }
}
?>
