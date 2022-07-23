<?php

echo "Hi, I am in a Docker container!<br/>";

try {
    $db = new PDO('mysql:host=docker-lampx-db-1;dbname=testDocker', 'root', '');
    echo "Connection successful!";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}