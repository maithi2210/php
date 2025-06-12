<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            min-height: 100vh;
        }
    </style>
</head>
<body>

    <div class="container d-flex flex-column justify-content-center align-items-center text-center">
        <h2 class="mb-4">Admin Panel</h2>
        <div class="d-flex gap-3">
            <a href="generate.php" class="btn btn-primary">Generate PDF</a>
            <a href="csv.php" class="btn btn-success">Generate CSV</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
