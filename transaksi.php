<?php
$transactionData = file_get_contents('php://input');
$file = fopen('data.txt', 'a');
fwrite($file, $transactionData . "\n");
fclose($file);
?>
