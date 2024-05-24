<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Projects List</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Projects List</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Assigned Employee</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= $project['id'] ?></td>
                    <td><?= $project['title'] ?></td>
                    <td><?= $project['description'] ?></td>
                    <td><?= $project['employee_name'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/projects/edit/'.$project['id']) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url('admin/projects/delete/'.$project['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this project?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
