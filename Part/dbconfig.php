<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mycms');

try{
$conn = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME, DB_USER, DB_PASS);
$conn->exec('SET NAMES utf8');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){

echo $e->getMessage();

}