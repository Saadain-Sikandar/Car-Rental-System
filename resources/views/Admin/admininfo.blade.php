<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Company Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    @include('components.adminNavbar')

    <div class="container my-5">
        <!-- Heading + Button -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-warning mb-0">
                <i class="fa-solid fa-building me-2"></i>Company Info
            </h3>
            <a href="{{route('Admin.adminInfoForm')}}" class="btn btn-warning fw-bold text-dark">
                <i class="fa-solid fa-plus me-2"></i>Add New Info
            </a>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">City</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- dummy data  -->
                    <tr>
                        <td>1</td>
                        <td>Karachi</td>
                        <td>123 Main Street</td>
                        <td>info@carlink.com</td>
                        <td>+92 300 1234567</td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>