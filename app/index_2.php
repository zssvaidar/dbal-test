<?php

namespace App\Core;

use App\Entity\Product;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once 'vendor/autoload.php';

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/Entity'],
    isDevMode: true,
);

$connectionParams = [
    'dbname' => 'pim',
    'user' => 'root',
    'password' => '12341234',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
];
$conn = DriverManager::getConnection($connectionParams);

$entityManager = new EntityManager($conn, $config);

$product = $entityManager->find(Product::class, '001816');
$r = $product->getAttributes()->get(0);
var_dump($r->getProductId());
var_dump($r->getAttributeId());
