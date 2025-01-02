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
    <!-- Include navigation bar -->
    <?php include 'common/navigation-bar.php'; ?>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide"
        data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/porto1.jpg" class="d-block w-100"
                    alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide</h5>
                    <p>Description for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/porto4.jpg" class="d-block w-100"
                    alt="Second Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide</h5>
                    <p>Description for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/porto3.jpg" class="d-block w-100"
                    alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third Slide</h5>
                    <p>Description for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button"
            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"
            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Card Section -->
    <div class="container my-4">
        <h1 class="text-center mb-4">Our Listings</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/porto1.jpg" class="card-img-top"
                        alt="Casa da Barra">
                    <div class="card-body">
                        <h5 class="card-title">Casa da Barra</h5>
                        <p class="card-text" id="desc1"
                            style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary"
                            onclick="toggleDescription('desc1', this)">Info</button>
                        <button class="btn btn-success"
                            onclick="window.open('https://www.airbnb.com/southern-europe/stays', '_blank')">Reservar</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/porto1.jpg" class="card-img-top"
                        alt="Casa da Barra">
                    <div class="card-body">
                        <h5 class="card-title">Casa da Barra</h5>
                        <p class="card-text" id="desc2"
                            style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary"
                            onclick="toggleDescription('desc2', this)">Info</button>
                        <button class="btn btn-success"
                            onclick="window.open('https://www.airbnb.com/southern-europe/stays', '_blank')">Reservar</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/porto1.jpg" class="card-img-top"
                        alt="Casa da Barra">
                    <div class="card-body">
                        <h5 class="card-title">Casa da Barra</h5>
                        <p class="card-text" id="desc3"
                            style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary"
                            onclick="toggleDescription('desc3', this)">Info</button>
                        <button class="btn btn-success"
                            onclick="window.open('https://www.airbnb.com/southern-europe/stays', '_blank')">Reservar</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100" id="hhhh">
                    <img src="assets/images/porto1.jpg" class="card-img-top"
                        alt="Casa da Barra">
                    <div class="card-body">
                        <h5 class="card-title">Casa da Barra</h5>
                        <p class="card-text" id="desc4"
                            style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary"
                            onclick="toggleDescription('desc4', this)">Info</button>
                        <button class="btn btn-success"
                            onclick="window.open('https://www.airbnb.com/southern-europe/stays', '_blank')">Reservar</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Include Footer -->
    <?php include 'common/footer.php'; ?>
    <!-- JavaScript to toggle description -->
    <!-- Bootstream JavaScript -->
    <?php include 'common/scripts.php'; ?>
</body>
</html>