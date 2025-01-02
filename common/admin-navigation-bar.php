<!-- Admin Navigation Bar -->


<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="../index.php">ISLA GAIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php"">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item" href="/admin/user-add.php">Insert</a></li>
                            <li><a class="dropdown-item" href="/admin/user-list.php">List</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>