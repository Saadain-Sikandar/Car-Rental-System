<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CarLink Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-3">
        <div class="container">
            <!-- logo  -->
            <div class="d-flex justify-content-center align-items-center gap-2">
                <i class="fa-solid fa-car-side text-white fs-2"></i>
                <a class="navbar-brand fw-bold fs-4" href="#">CarLink</a>
            </div>

            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ route('aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ route('allCars') }}">Our Cars</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('myRentals') }}" class="nav-link text-warning">My Rentals</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('checkOut') }}" class="nav-link text-warning">
                            <i class="fa-solid fa-cart-shopping"></i> Checkout
                        </a>
                    </li>
                    <!-- Divider (optional) -->
                    <li class="nav-item d-none d-lg-block mx-2 text-secondary">|</li>

                    <li class="nav-item">
                        <a class="nav-link text-warning" href="{{ route('auth.login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning btn-sm text-dark fw-bold ms-lg-2" href="{{ route('auth.signup') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>