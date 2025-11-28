<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details - CarLink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light px-2">

    @include('components.navbar')

    <div class="container my-5">
        <div id="car-detail" class="row justify-content-center">
            <!-- Car detail will show here  -->
            <div class="col-lg-8">
                <div class="card shadow-lg border-0">
                    <img src="{{ asset( 'car_images/'. $car->image) }} " class="card-img-top rounded-top" alt="{{$car->name}}" />
                    <div class="card-body">
                        <h2 class="fw-bolder text-warning mb-3">{{$car->name}}</h2>
                        <p class="text-muted mb-3"><span class="fw-bolder fs-5 ">Description: </span>{{$car->Desc}}</p>

                        <table class="table table-bordered text-start">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th colspan="2">Car Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Make</th>
                                    <td>{{$car->make}}</td>
                                </tr>
                                <tr>
                                    <th>Model</th>
                                    <td>{{$car->model}}</td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>{{$car->color}}</td>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <td>{{$car->year}}</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>PKR {{$car->price}}/day</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{$car->status}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- for saving image in local storage -->
                        <?php
                        $carImageUrl = asset('car_images/'. $car->image)
                        ?>
                        <div class="text-center mt-4">
                            <button class="btn btn-dark px-4"
                                onclick="addToCart(
                            '{{$car->id}}',
                            '{{$car->name}}',
                            '{{$car->price}}',
                            '{{$car->model}}',
                            '{{$car->year}}',
                            '{{$carImageUrl}}',
                            '{{$car->color}}',
                            '{{$car->status}}'
                            )">
                                <i class="fa-solid fa-cart-plus me-2"></i>Add to Cart
                            </button>
                            <button class="btn btn-outline-secondary ms-2" onclick="HandleBack()">
                                <i class="fa-solid fa-arrow-left me-1"></i>Back
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // handling Back 
        function HandleBack() {
            window.location.href = "{{ route('allCars') }}";
        }

        // Function to add selected car to cart
        function addToCart(id, name, price, model, year, image, color, status) {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

            // Status Checking
            if(status.toLowerCase() === 'not available'){
                Swal.fire({
                    title: `Selected Car is not available right now!`,
                    icon: "error",
                    draggable: true
                });
                return;
            }

            // Check if the car is already in cart
            const exists = cart.some(car => car.id === id);

            if (!exists) {
                cart.push({
                    id,
                    name,
                    price,
                    model,
                    year,
                    image,
                    color
                });
                localStorage.setItem('cart', JSON.stringify(cart));
                Swal.fire({
                    title: `${name} added to cart successfully!`,
                    icon: "success",
                    draggable: true
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

</body>

</html>