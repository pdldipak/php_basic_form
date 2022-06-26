<?php
define('DB_HOST', 'localhost:3307');
define('DB_USER', 'feedback');
define('DB_PASS', '123456');
define('DB_NAME', 'php_feedback');

// Create connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($connection->connect_error) {
  die('Connection failed: ' . $connection->connect_error);
}

// echo 'Connected successfully';