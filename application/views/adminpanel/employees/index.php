<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Employees List</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Employees List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $employee['id'] ?></td>
                    <td><?= $employee['name'] ?></td>
                    <td><?= $employee['email'] ?></td>
                    <td><?= $employee['phone'] ?></td>
                    <td><?= $employee['address'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/employees/edit/'.$employee['id']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('admin/employees/delete/'.$employee['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
