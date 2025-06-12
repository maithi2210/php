<?php
session_start();
include 'db.php';

if (!isset($_SESSION["uname"])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['pid']) || empty($_GET['pid'])) {
    die("Invalid Product ID");
}

$pid = $_GET['pid'];


$stmt = $conn->prepare("DELETE FROM product WHERE pid = ?");
$stmt->bind_param("i", $pid);

if ($stmt->execute()) {
    header("Location: home.php?msg=Product deleted successfully");
    exit();
} else {
    echo "Error deleting product: " . $conn->error;
}
?>
