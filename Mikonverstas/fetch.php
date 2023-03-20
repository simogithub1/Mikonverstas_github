<?php

require_once('db_config.php');

$id = 56;

$query = "SELECT * FROM oppilaat WHERE id = :id LIMIT 1";

$result = $db_connection->prepare($query);

$result->execute([
  'id'  =>  $id
]);

$result = $result->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);

echo "<br>";
echo $result['sukunimi'];
