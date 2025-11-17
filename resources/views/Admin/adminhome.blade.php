<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">

    <!-- Nav  -->

    @include('components.adminNavbar')

    <!-- Welcome Section -->
    <div class="container mt-5 text-center">
        <h1 class="text-warning">Welcome to Admin Panel</h1>
        <p class="text-light bg-dark p-3 rounded mt-3">
            Manage cars and system settings from here.
        </p>
    </div>

    <!-- All Cars Section -->
    <section class="container my-5">
        <h2 class="text-center text-dark fw-bold mb-4 border-bottom pb-2">All Cars</h2>

        <div class="row g-4">
            <!-- Car 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    <img height="320px"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzueJEJMXguSYXNgbskvTQYR_TBXjXz3g36g&s"
                        class="card-img-top" alt="Honda Civic">
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">Honda Civic</h5>
                        <p class="bg-black text-white p-1">PKR 9,000 / day</p>
                    </div>
                </div>
            </div>

            <!-- Car 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    <img height="320px"
                        src="https://i0.wp.com/bestsellingcarsblog.com/wp-content/uploads/2015/01/Toyota-Corolla-Pakistan-2014.-Picture-courtesy-of-zeeginition.com_.jpg"
                        class="card-img-top" alt="Toyota Corolla">
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">Toyota Corolla</h5>
                        <p class="bg-black text-white p-1">PKR 8,000 / day</p>
                    </div>
                </div>
            </div>

            <!-- Car 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    <img height="320px"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBQoF56hymJT4zvcjTUuRsh4BBkUKod7NfuA&s"
                        class="card-img-top" alt="Toyota Hilux Revo">
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">Toyota Hilux Revo</h5>
                        <p class="bg-black text-white p-1">PKR 15,000 / day</p>
                    </div>
                </div>
            </div>

            <!-- Car 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    <img height="320px"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShVNIGASb0JHtl4r5nbUjAGNccmFyTTRYW4A&s"
                        class="card-img-top" alt="Suzuki Alto">
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">Suzuki Alto</h5>
                        <p class="bg-black text-white p-1">PKR 5,000 / day</p>
                    </div>
                </div>
            </div>

            <!-- Car 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    <img height="320px" src="https://autos.hamariweb.com/images/carimages/5012_1.jpg" class="card-img-top"
                        alt="Toyota Fortuner">
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">Toyota Fortuner</h5>
                        <p class="bg-black text-white p-1">PKR 18,000 / day</p>
                    </div>
                </div>
            </div>

            <!-- Car 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    <img height="320px"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn9RsQ1oixSRrlC1JZFLNxIMssVpy3Eb2LSw&s"
                        class="card-img-top" alt="KIA Sportage">
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">KIA Sportage</h5>
                        <p class="bg-black text-white p-1">PKR 12,000 / day</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
     @include('components.Footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>