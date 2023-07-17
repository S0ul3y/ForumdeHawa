<?php
try {
    $bd = new PDO("mysql:host=localhost;dbname=e-commerce", "root", "");
} catch (Exception $e) {
    die($e->getMessage());
}
