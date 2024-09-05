<?php
declare(strict_types=1);

use Dotenv\Dotenv;
require_once __DIR__ . '/vendor/autoload.php';
session_start();

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();