<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Edit Employee</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Employee</h1>
        <form action="<?= base_url('admin/employees/update/'.$employee['id']) ?>" method="post">
            <div class="form-group">
                <label for="name">FullName</label>
                <input type="text" name="name" class="form-control" value="<?= $employee['name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $employee['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" value="<?= $employee['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" class="form-control" required><?= $employee['address'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
