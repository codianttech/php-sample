<?php
// Path to the .env file
$envFilePath = __DIR__ . "/../.env";

// Parse the .env file
$env = parse_ini_file($envFilePath);

// Database configuration constants
define("DB_HOST", $env['DB_HOST']);  
define("DB_USER", $env['DB_USER']);  
define("DB_PASSWORD", $env['DB_PASSWORD']);  
define("DB_DATABASE", $env['DB_DATABASE']);
?>