<?php
$secrets = parse_ini_file("secrets.ini");

try {
    $conn = new PDO("mysql:host=".$secrets['db']['servername'].";dbname=".$secrets['db']['dbname'], $secrets['db']['username'], $secrets['db']['password']);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE ".$secrets['db']['dbname'];
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;