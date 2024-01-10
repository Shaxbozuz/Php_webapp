<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "php-blog";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // ser the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    echo "Tarmoq ishlamadi: " . $e->getMessage();
}