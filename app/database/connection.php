<?php
// database/connection.php

$host = 'localhost';
$db = 'blog_db'; // قاعدة البيانات
$user = 'root';  // اسم المستخدم
$pass = '';      // كلمة المرور (افتراضي فارغ في XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
