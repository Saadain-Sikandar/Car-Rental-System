<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">

    @include('components.adminNavbar')

    <div class="container mt-5">
        <!-- Heading -->
        <div class="d-flex justify-content-center align-items-center mb-4">
            <h2 class="text-warning fw-bold me-2">
                <i class="fa-solid fa-plus-circle"></i> Add Car
            </h2>
        </div>

        <!-- Add Car Form -->
        <div class="card shadow-lg border-0 mx-auto" style="max-width: 700px;">
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Car Name -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Car Name</label>
                        <input type="text" name="car" class="form-control" placeholder="Enter car name" required>
                    </div>

                    <!-- Color -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Color</label>
                        <input type="text" name="color" class="form-control" placeholder="Enter car color" required>
                    </div>

                    <!-- Model -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Model</label>
                        <input type="number" name="model" class="form-control" placeholder="Enter model year" required>
                    </div>

                    <!-- Car Number -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Car No</label>
                        <input type="text" name="car_no" class="form-control" placeholder="Enter registration number" required>
                    </div>

                    <!-- Image Path -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Image (Path or Upload)</label>
                        <input type="text" name="image" class="form-control mb-2" placeholder="Enter image URL">
                        <small class="text-secondary">OR upload image below</small>
                        <input type="file" name="image_file" class="form-control mt-2">
                    </div>

                    <!-- Price per Day -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Price / Day (PKR)</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price per day" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-warning text-dark fw-bold">
                            <i class="fa-solid fa-plus me-1"></i> Add Car
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>