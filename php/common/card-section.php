<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listings</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
                        <p class="card-text" id="desc1">
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Barra tem um conforto inigualável.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary"
                            onclick="toggleDescription('desc1')">Info</button>
                        <button class="btn btn-success" onclick="window.open('https://www.airbnb.com/southern-europe/stays', '_blank')" >Reservar</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/porto3.jpg" class="card-img-top"
                        alt="Casa da Ria">
                    <div class="card-body">
                        <h5 class="card-title">Casa da Ria</h5>
                        <p class="card-text" id="desc2">
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Ria tem um conforto inigualável.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary"
                            onclick="toggleDescription('desc2')">Info</button>
                        <button class="btn btn-success" onclick="window.open('https://www.airbnb.com/southern-europe/stays', '_blank')">Reservar</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/porto3.jpg" class="card-img-top"
                        alt="Casa da Ria">
                    <div class="card-body">
                        <h5 class="card-title">Casa da Ria</h5>
                        <p class="card-text" id="desc3">
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Ria tem um conforto inigualável.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary"
                            onclick="toggleDescription('desc3')">Info</button>
                        <button class="btn btn-success" onclick="window.open('https://www.airbnb.com/southern-europe/stays', '_blank')">Reservar</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/porto3.jpg" class="card-img-top"
                        alt="Casa da Ria">
                    <div class="card-body">
                        <h5 class="card-title">Casa da Ria</h5>
                        <p class="card-text" id="desc4">
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Ria tem um conforto inigualável.Com um estilo arquitetônico muito tradicional, a
                            Casa da Ria tem um conforto inigualável.Com um estilo arquitetônico muito tradicional, a
                            Casa da Ria tem um conforto inigualável.
                            Com um estilo arquitetônico muito tradicional, a
                            Casa da Ria tem um conforto inigualável.Com um estilo arquitetônico muito tradicional, a
                            Casa da Ria tem um conforto inigualável.
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-primary"
                            onclick="toggleDescription('desc4')">Info</button>
                        <button class="btn btn-success">Reservar</button>
                    </div>
                </div>
            </div>
            <!-- Repeat similar structure for the other two cards -->
        </div>
    </div>

    <!-- <?php include 'common/scripts.php'; ?> -->

    
</body>
</html>
