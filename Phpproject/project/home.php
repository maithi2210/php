<?php 
session_start();
include 'db.php';

if (!isset($_SESSION["uname"])) {
    header("Location:login.php");
    exit();
}

$result = $conn->query("SELECT * FROM product");
?>

<!doctype html>
<html lang="en">
<head>
    <title>Product List</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Product Management</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insert.php">Add Data</a>
                    </li>
                </ul>
                <span class="navbar-text me-3">Welcome, <strong><?= htmlspecialchars($_SESSION["uname"]) ?></strong></span>
                <a class="btn btn-outline-danger" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>

   
    <div class="container mt-5">
        <h2 class="text-center">Product List</h2>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row["pid"]) ?></td>
                            <td><?= htmlspecialchars($row["pname"]) ?></td>
                            <td><?= htmlspecialchars($row["price"]) ?></td>
                            <td><?= htmlspecialchars($row["quantity"]) ?></td>
                            <td><?= htmlspecialchars($row["category"]) ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="edit.php?pid=<?= $row['pid'] ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="delete.php?pid=<?= $row['pid'] ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <div class="text-end mt-3">
    <a href="csv.php" class="btn btn-success">Generate CSV</a>
</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
