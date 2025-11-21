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
                        <th>Make</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Car No</th>
                        <th>Image (Path)</th>
                        <th>Price/Day</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        @foreach($cars as $car)
                        <td>{{$car->id}}</td>
                        <td>{{$car->name}}</td>
                        <td>{{$car->make}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->year}}</td>
                        <td>{{$car->color}}</td>
                        <td>{{$car->carno}}</td>
                        <td>
                            @if($car->image)
                            <img src="{{ asset('car_images/' . $car->image) }}" width="100" height="60"
                                class="rounded" alt="{{ $car->name }}">
                            @else
                            N/A
                            @endif
                        </td>
                        <td>{{$car->price}}/PKR</td>
                        <td>
                            <a href="{{ route('admin.editCar', $car->id) }}"> <button class="btn btn-sm btn-primary me-1">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit </button></a>

                            <button class="btn btn-sm btn-danger">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- footer  -->
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<!-- Sweet Alert  -->
@include('sweetalert::alert')

</html>