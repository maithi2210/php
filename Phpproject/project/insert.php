<?php 
include 'db.php';
session_start();

if (!isset($_SESSION["uname"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pname = $_POST["pname"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $category = $_POST["category"];

    $sql = $conn->prepare("INSERT INTO product (pname, price, quantity, category) VALUES (?, ?, ?, ?)");
    $sql->bind_param("sdis", $pname, $price, $quantity, $category);

    if ($sql->execute()) {
        echo "<script>alert('Data Inserted Successfully'); window.location.href='home.php';</script>";
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Insert Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">Product Management</a>
            <span class="navbar-text">Welcome, <strong><?= htmlspecialchars($_SESSION["uname"]) ?></strong></span>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="card-title text-center mb-4">Insert Product</h4>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="pname" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="category" required>
                                <option value="Electronics">Electronics</option>
                                <option value="Clothing">Clothing</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Books">Books</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
