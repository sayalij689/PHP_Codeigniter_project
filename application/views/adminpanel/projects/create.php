<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Add Project</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Add Project</h1>
        <form action="<?= base_url('admin/projects/store') ?>" method="post">
            <div class="form-group">
                <label for="employee_id">Assign Employee</label>
                <select name="employee_id" class="form-control" required>
                    <?php foreach ($employees as $employee): ?>
                        <option value="<?= $employee['id'] ?>"><?= $employee['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Project Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
