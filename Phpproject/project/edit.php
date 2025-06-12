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

$stmt = $conn->prepare("SELECT * FROM product WHERE pid = ?");
$stmt->bind_param("i", $pid);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Product not found!");
}

$product = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];

    $update_stmt = $conn->prepare("UPDATE product SET pname=?, price=?, quantity=?, category=? WHERE pid=?");
    $update_stmt->bind_param("sdisi", $pname, $price, $quantity, $category, $pid);

    if ($update_stmt->execute()) {
        header("Location: home.php?msg=Product updated successfully");
        exit();
    } else {
        echo "Error updating product: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Product</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="pname" class="form-control" value="<?= htmlspecialchars($product['pname']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" value="<?= $product['price'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="<?= $product['quantity'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" value="<?= htmlspecialchars($product['category']) ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="home.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
