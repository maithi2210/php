<?php 
include 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    if ($uname==="admin" && $pass==="admin123") {
        $_SESSION["uname"]="admin";
        header("Location:admin.php");
    }

    $sql= $conn->prepare("select password from users where uname=?");
    $sql->bind_param("s",$uname);

    $sql->execute();

    $sql->store_result();
    $sql->bind_result($password);

    if ($sql->fetch() && password_verify($pass,$password)) {
        $_SESSION["uname"]=$uname;
        header("Location:home.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
        .card {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4">
                    <h2 class="text-center">Login</h2>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username:</label>
                            <input type="text" name="uname" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password:</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
