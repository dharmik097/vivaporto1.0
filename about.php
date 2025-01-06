<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Include navigation bar -->
    <?php include 'common/navigation-bar.php'; ?>

    <div class="container my-5">
        <!-- Heading Section -->
        <h1 class="text-center">About us</h1>
        <!-- Paragraph Section -->
        <div class="mt-4">
            <p>
                Lorem Ipsum is not simply random text. It has roots in a piece
                of classical Latin literature from 45 BC. Richard McClintock
                looked up one of the more obscure Latin words, consectetur, from
                a Lorem Ipsum passage, and going through the cites of the word
                in classical literature, discovered the undoubtable source.
            </p>
        </div>
        <!-- Team Section -->
        <div class="row text-center mt-4">
            <div class="col-md-3">
                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" alt="Person 1">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" alt="Person 2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" alt="Person 3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-3">
                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" alt="Person 4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <!-- Additional Info Section -->
        <div class="mt-4">
            <p>
                Animi architecto, rerum? Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Illum facere impedit dolor ea hic, earum
                autem. Et nam explicabo ea qui! Esse cumque quaerat ut est
                repellat asperiores perferendis assumenda necessitatibus debitis
                nisi atque, repellendus quod excepturi, tenetur nesciunt quo?
            </p>
        </div>
        <!-- Button -->
        <div class="text-center mt-3">
            <a href="./contact.php" class="btn btn-primary">More Info...</a>
        </div>
    </div>
    <!-- Bootstream JavaScript -->
    <?php include 'common/scripts.php'; ?>
    <!-- Include Footer -->
    <?php include 'common/footer.php'; ?>
</body>
</html>
