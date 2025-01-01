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
    <?php include '../common/admin-navigation-bar.php'; ?>
    <div class="container my-5">
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email"
                    placeholder="Insira email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password"
                    placeholder="Insira password">
            </div>
            <div class="mb-3">
                <label for="address1" class="form-label">Morada</label>
                <input type="text" class="form-control" id="address1"
                    placeholder="Morada">
            </div>
            <div class="mb-3">
                <label for="address2" class="form-label">Morada 2</label>
                <input type="text" class="form-control" id="address2"
                    placeholder="Apartamento, hotel, casa, etc.">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="city" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="city"
                        placeholder="Cidade">
                </div>
                <div class="col-md-4">
                    <label for="district" class="form-label">Distrito</label>
                    <select id="district" class="form-select">
                        <option selected>Escolher...</option>
                        <option value="1">Distrito 1</option>
                        <option value="2">Distrito 2</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="postalCode" class="form-label">Código
                        Postal</label>
                    <input type="text" class="form-control" id="postalCode"
                        placeholder="Código Postal">
                </div>
            </div>
            <div class="mb-3 mt-3">
                <label for="date" class="form-label">Data</label>
                <input type="date" class="form-control" id="date">
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="newsletter">
                <label class="form-check-label" for="newsletter">Estou
                    interessado(a) em receber as newsletter com as novidades
                    semanais.</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
    </div>

     <!-- Bootstream JavaScript -->
     <?php include '../common/scripts.php'; ?>
    <!-- Include Footer -->
    <?php include '../common/footer.php'; ?>
</body>
</html>