<?php
require_once __DIR__ . "\helpers\logger.php";

$logfile = __DIR__ . "\..\log\backend.log";
$message = "Message";

logger($logfile, $message);
