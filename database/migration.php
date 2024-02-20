<?php
include_once('./dbconnection.php');

$db = new Dbconnection();
$connection = $db->getConnection();
try {
    $query = "CREATE TABLE `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
        `name` varchar(50) NOT NULL,
        `email` varchar(50) NOT NULL,
        `phone_number` varchar(15) NOT NULL,
        `address` text NULL,
        `password` varchar(255) NOT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp()
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";
    $createTable = $connection->exec($query);
    $password = md5("Test@123");
    $insertQuery = "INSERT INTO users (name, email, phone_number, address, password) VALUES ('Admin','backend@mailinator.com', '1234567890', 'Indore','$password')";
    $connection->exec($insertQuery);
    die("Database migration completed");
} catch (Exception $e) {
    die("Table already created");
}

?>