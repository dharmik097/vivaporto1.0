<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Website Project</title>
    <!-- Bootstream CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        .header {
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <!-- Include admin navigation bar -->
    <?php include '../common/admin-navigation-bar.php'; ?>
    <!-- User List -->
    <!-- Demo header-->
    <div class="container my-5">
        <div class="container py-5 text-white">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body p-5">
                            <!-- Responsive table -->
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>
                                                <!-- Call to action buttons -->
                                                <ul class="list-inline m-0">
                                                    <li
                                                        class="list-inline-item">
                                                        <button
                                                            class="btn btn-success btn-sm rounded-0"
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Edit"><i
                                                                class="fa fa-edit"></i></button>
                                                    </li>
                                                    <li
                                                        class="list-inline-item">
                                                        <button
                                                            class="btn btn-danger btn-sm rounded-0"
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td>
                                                <!-- Call to action buttons -->
                                                <ul class="list-inline m-0">
                                                    <li
                                                        class="list-inline-item">
                                                        <button
                                                            class="btn btn-success btn-sm rounded-0"
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Edit"><i
                                                                class="fa fa-edit"></i></button>
                                                    </li>
                                                    <li
                                                        class="list-inline-item">
                                                        <button
                                                            class="btn btn-danger btn-sm rounded-0"
                                                            type="button"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Footer -->
    <?php include '../common/footer.php'; ?>
    <?php include '../common/scripts.php'; ?>
</body>
</html>