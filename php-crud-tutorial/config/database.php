<?php
/**
 * Created by PhpStorm.
 * User: Stef
 * Date: 3/26/2020
 * Time: 10:57 AM
 */

$host = 'localhost';
$db_name = 'php_beginer_crud_level_1';
$username = 'root';
$password = '';

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
} catch (PDOException $e) {
    // show error
    echo "Connection error ".$e->getMessage();
}