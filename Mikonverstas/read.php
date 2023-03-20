<?php

require_once('db_config.php');

$query = "SELECT * FROM oppilaat";

if($results = $db_connection->query($query)) {
foreach($results as $result) {
    echo $result['etunimi'] . " " . $result['sukunimi'];
    echo "<br>";
}
} else {
    echo "No results to display.";
}

$db_connection = NULL;

