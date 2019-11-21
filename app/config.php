<?php

$server = "localhost";
$dbuser = "postgres";
$dbpassword = "root";
$dbname = "php_native";

try {
    $connection = new PDO("pgsql:host=$server;dbname=$dbname", $dbuser, $dbpassword);


    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlQuery = "
        CREATE TABLE IF NOT EXISTS users (
        id serial PRIMARY KEY, 
        firstName VARCHAR(35) NOT NULL,
        lastName VARCHAR(35) NOT NULL,
        email VARCHAR(55))";

    $connection->exec($sqlQuery);

//    echo "Table created successfully!";
}
catch(PDOException $e){
    echo $sqlQuery . "<br>" . $e->getMessage();
}
