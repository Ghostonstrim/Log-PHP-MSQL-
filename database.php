<?php
$server = 'localhost:8080';
$username = 'root';
$password = '';
$database = 'php_login_database2';

try {
  $conn = new PDO("mysql:host=localhost;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
    
?>