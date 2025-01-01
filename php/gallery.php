<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
    <!-- Include navigation bar -->
    <?php include 'common/navigation-bar.php'; ?>

    <!-- gallery  -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 col-md-4 mb-4">
                <img src="https://placehold.co/600x400" alt="Gallery Image 1"
                    class="img-fluid gallery-img">
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://placehold.co/600x400" alt="Gallery Image 2"
                    class="img-fluid gallery-img">
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://placehold.co/600x400" alt="Gallery Image 3"
                    class="img-fluid gallery-img">
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://placehold.co/600x400" alt="Gallery Image 4"
                    class="img-fluid gallery-img">
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://placehold.co/600x400" alt="Gallery Image 5"
                    class="img-fluid gallery-img">
            </div>
            <div class="col-6 col-md-4 mb-4">
                <img src="https://placehold.co/600x400" alt="Gallery Image 6"
                    class="img-fluid gallery-img">
            </div>
        </div>
    </div>

     <!-- Bootstream JavaScript -->
     <?php include 'common/scripts.php'; ?>
  <!-- Include Footer -->
  <?php include 'common/footer.php'; ?>
</body>
</html>