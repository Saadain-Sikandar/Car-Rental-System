<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarLink - All Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light px-1">

    <!-- Nav  -->

    @include('components.navbar')

    <!-- Welcome Section -->
    <div class="container text-center mt-5 py-5 bg-dark rounded-4 shadow-lg">
        <div class="mb-4">
            <i class="fa-solid fa-car-side text-warning fs-1 mb-3"></i>
            <h1 class="text-warning fw-bold">CarLink</h1>
        </div>
        <p class="text-light fs-5 bg-secondary bg-opacity-25 py-3 px-4 rounded-3 d-inline-block shadow-sm">
            Rent the car of your choice and drive in style.
        </p>
        <div class="mt-4">
            <a href="{{ route('aboutus') }}" class="btn btn-outline-light px-4">
                Learn More
            </a>
        </div>
    </div>

    <!-- All Cars Section -->
    <section class="container my-5">
        <div class="row g-4" id="car-list-container">
            @foreach($cars as $car)
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    <img height="320px" src="{{ asset( 'car_images/' . $car->image) }}" class="card-img-top" alt="${car.name}">
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">{{$car->name}}</h5>
                        <p class="bg-black text-white p-1">PKR {{$car->price}}/day</p>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="{{ route('car-details' , $car->id) }}" class="btn btn-dark btn-sm">
                                View Details
                            </a>
                            <button class="btn btn-warning btn-sm"
                                onclick="addToCart
                                ('{{ $car->id }}',
                                '{{ $car->name }}', 
                                '{{ $car->model }}', 
                                '{{ $car->year }}',
                                '{{ $car->price }}',
                                 '{{ asset('car_images/'.$car->image) }}')">
                                <i class="fa-solid fa-cart-plus"></i> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Footer  -->
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

<script>
    function addToCart(id, name, model, year, price, image) {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];

        // Check for duplicates
        if (!cart.some(car => car.id === id)) {
            cart.push({
                id,
                name,
                price,
                image,
                year,
                model,
            });
            localStorage.setItem("cart", JSON.stringify(cart));

            Swal.fire({
                title: `${name} added to cart successfully!`,
                icon: "success",
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            Swal.fire({
                title: `${name} is already in your cart!`,
                icon: "info",
                timer: 1500,
                showConfirmButton: false
            });
        }
    }
</script>

</html>