<?php 
$db_host = 'localhost';
$db_name = 'mikonverstas';
$db_username = 'patrick';
$db_password = 'B7ppohY!s3.(oRF@';

$dsn = "mysql:host=$db_host;dbname=$db_name";

try {
    $db_connection = new PDO($dsn, $db_username, $db_password);
} catch (Exception $e) {
echo "there was a failure - " . $e->getMessage();
}
