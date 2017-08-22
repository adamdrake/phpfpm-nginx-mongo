<?php

$manager = new MongoDB\Driver\Manager('mongodb://mongo');
$command = new MongoDB\Driver\Command(['ping' => 1]);

try {
    $cursor = $manager->executeCommand('admin', $command);
} catch(MongoDB\Driver\Exception $e) {
    echo $e->getMessage(), "\n";
    exit;
}

$response = $cursor->toArray()[0];

var_dump($response);
sleep(5)
?>
