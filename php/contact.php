<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
   <!-- Include navigation bar -->
   <?php include 'common/navigation-bar.php'; ?>

    <!-- Contact Section -->
    <div class="container my-5">
        <h2>Contact Us</h2>
        <form action="admin/add.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message"
                    rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

     <!-- Bootstream JavaScript -->
     <?php include 'common/scripts.php'; ?>
   <!-- Include Footer -->
   <?php include 'common/footer.php'; ?>
</body>
</html>