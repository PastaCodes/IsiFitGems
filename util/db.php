<?php
if (SETTINGS['hosted-locally']) {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'isifitgems';
} else
    die('Only local hosting is currently supported.');
$db = new mysqli($servername, $username, $password, $dbname);
?>
