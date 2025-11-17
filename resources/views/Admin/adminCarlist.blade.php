<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Car List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">

    @include('components.adminNavbar')

    <div class="container mt-5">
        <h1 class="text-center text-warning fw-bold mb-4">Car Info List</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle shadow-sm">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ID</th>
                        <th>Car</th>
                        <th>Color</th>
                        <th>Model</th>
                        <th>Car No</th>
                        <th>Image (Path)</th>
                        <th>Price/Day</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Honda Civic</td>
                        <td>White</td>
                        <td>2022</td>
                        <td>ABC-123</td>
                        <td>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzueJEJMXguSYXNgbskvTQYR_TBXjXz3g36g&s"
                                width="100" height="60" class="rounded" alt="Honda Civic">
                        </td>
                        <td>PKR 9,000</td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Toyota Corolla</td>
                        <td>Silver</td>
                        <td>2021</td>
                        <td>XYZ-456</td>
                        <td>
                            <img src="https://i0.wp.com/bestsellingcarsblog.com/wp-content/uploads/2015/01/Toyota-Corolla-Pakistan-2014.-Picture-courtesy-of-zeeginition.com_.jpg"
                                width="100" height="60" class="rounded" alt="Toyota Corolla">
                        </td>
                        <td>PKR 8,000</td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Toyota Hilux Revo</td>
                        <td>Black</td>
                        <td>2023</td>
                        <td>JKL-789</td>
                        <td>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBQoF56hymJT4zvcjTUuRsh4BBkUKod7NfuA&s"
                                width="100" height="60" class="rounded" alt="Toyota Hilux Revo">
                        </td>
                        <td>PKR 15,000</td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Suzuki Alto</td>
                        <td>Red</td>
                        <td>2020</td>
                        <td>LMN-321</td>
                        <td>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShVNIGASb0JHtl4r5nbUjAGNccmFyTTRYW4A&s"
                                width="100" height="60" class="rounded" alt="Suzuki Alto">
                        </td>
                        <td>PKR 5,000</td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Toyota Fortuner</td>
                        <td>Gray</td>
                        <td>2023</td>
                        <td>DEF-654</td>
                        <td>
                            <img src="https://autos.hamariweb.com/images/carimages/5012_1.jpg"
                                width="100" height="60" class="rounded" alt="Toyota Fortuner">
                        </td>
                        <td>PKR 18,000</td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>KIA Sportage</td>
                        <td>Blue</td>
                        <td>2022</td>
                        <td>GHI-987</td>
                        <td>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn9RsQ1oixSRrlC1JZFLNxIMssVpy3Eb2LSw&s"
                                width="100" height="60" class="rounded" alt="KIA Sportage">
                        </td>
                        <td>PKR 12,000</td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- footer  -->
     @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
