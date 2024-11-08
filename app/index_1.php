<?php

namespace Ice\DbalTest\Core;

require_once 'vendor/autoload.php';

use Doctrine\DBAL\DriverManager;

//..
$connectionParams = [
    'dbname' => 'pim',
    'user' => 'root',
    'password' => '12341234',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
];
$conn = DriverManager::getConnection($connectionParams);

$sql = "SELECT * FROM product limit 100";

$stmt = $conn->query($sql); // Simple, but has several drawbacks

while (($row = $stmt->fetchAssociative()) !== false) {
    // echo json_encode($row, JSON_UNESCAPED_UNICODE);
    echo $row['id'];
    break;
}
// var_dump($stmt);