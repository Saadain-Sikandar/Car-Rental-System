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
        <h1 class="text-warning">Welcome to Admin DashBoard</h1>
        <p class="text-light bg-dark p-3 rounded mt-3">
            Manage cars and system settings from here.
        </p>
    </div>

    <!-- All Cars Section -->
    <section class="container my-5">
        <h2 class="text-center text-dark fw-bold mb-4 border-bottom pb-2">All Cars</h2>

        <div class="row g-4">
            <!-- Cars -->
            @foreach($cars as $car)
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    @if($car->image)
                    <img height="320px"
                        src="{{ asset('car_images/' . $car->image ) }}"
                        class="card-img-top" alt="{{$car->image}}">
                    @else
                    <img height="320px" src="{{ asset('default_car.png') }}" class="card-img-top" alt="">
                    @endif
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">{{$car->model}}</h5>
                        <p class="bg-black text-white p-1">PKR {{$car->price}} /day</p>
                        <p class="mt-5  p-1 fw-bolder bg-black text-white text-left">Status: {{$car->status}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Footer  -->
    @include('components.Footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
@include('sweetalert::alert')

</html>