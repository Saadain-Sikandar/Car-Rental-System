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
        <div class="card shadow-lg border-0 mx-auto mb-5 " style="max-width: 700px;">
            <div class="card-body">
                <form action="{{ route('admin.storecar') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Car Name -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Car Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter car name" required>
                    </div>

                    <!-- Make -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Make</label>
                        <input type="text" name="make" class="form-control" placeholder="Enter car make" required>
                    </div>

                    <!-- Model -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Model</label>
                        <input type="text" name="model" class="form-control" placeholder="Enter model" required>
                    </div>

                    <!-- Year -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Year</label>
                        <input type="number" name="year" class="form-control" placeholder="Enter year" required>
                    </div>

                    <!-- Color -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Color</label>
                        <input type="text" name="color" class="form-control" placeholder="Enter car color">
                    </div>

                    <!-- Price per Day -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Price / Day (PKR)</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price per day" required>
                    </div>

                    <!-- Car Number -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Car Number</label>
                        <input type="text" name="carno" class="form-control" placeholder="Enter registration number" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">Description</label>
                        <textarea name="Desc" class="form-control" placeholder="Enter car description" required></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <small class="text-secondary">Accepted formats: jpg, jpeg, png</small>
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