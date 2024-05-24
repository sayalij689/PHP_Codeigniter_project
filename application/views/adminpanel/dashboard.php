<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/employees/create') ?>">Add Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/employees') ?>">List Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/projects/create') ?>">Add Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin/projects') ?>">List Projects</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                
            </ul>
        </div>
    </nav>

    <div class="container mt-5 text-center">
        <h1>Welcome to the Dashboard</h1>
       
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
