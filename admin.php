<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website Project</title>
    <!-- Bootstream CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Include admin navigation bar -->
    <?php include 'common/admin-navigation-bar.php'; ?>
    <div class="container my-5">
        <div class="text-center p-4 bg-primary text-white rounded shadow">
            <h1 class="display-4 fw-bold">Welcome to the Admin Dashboard</h1>
            <p class="lead">Manage your application efficiently with intuitive
                controls and real-time insights.</p>
            <div class="mt-4">
            <a class="btn btn-light btn-lg me-2" href="/admin/user-add.php">A - Add User</a>
            <a class="btn btn-outline-light btn-lg" href="/admin/user-list.php">A - List Users</a>
            </div>
        </div>
    </div>
    <!-- Bootstream JavaScript -->
    <?php include 'common/scripts.php'; ?>
    <!-- Include Footer -->
    <?php include 'common/footer.php'; ?>
</body>
</html>