<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMD/cd8kFwQhW9J+E6jCj8pS0R+c2zNfF/0S55i2n2wFfD3t9w4/2F15h83sL0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CarLink</title>
</head>

<body>
    <style>
        .sub-heading {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 2rem;
            color: #444;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Apply animation when section becomes visible */
        .fade-up {
            animation: fadeUp 1s ease-out;
        }
    </style>
    @include('components.navbar')
    <!-- Carousel  -->
    <div id="carCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://carrentpk.com/img/slider-bg1.png" class="d-block w-100" alt="Luxury Car">
                <div class="carousel-caption bg-dark bg-opacity-50 rounded p-1">
                    <h3>Drive Your Dream</h3>
                    <p>Choose from the best cars available for rent.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/736x/a3/7f/7b/a37f7b4305a0f8caf3e0c94d34d4a24a.jpg" class="d-block w-100" alt="Luxury Cars">
                <div class="carousel-caption bg-dark bg-opacity-50 rounded p-1">
                    <h3>Comfort & Style</h3>
                    <p>Perfect cars for business or leisure trips.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM5xAftNXjdjJsY7pBudR5gqF2rk323x-8Aw&s" class="d-block w-100" alt="Sports Car">
                <div class="carousel-caption bg-dark bg-opacity-50 rounded p-1">
                    <h3>Adventure Awaits</h3>
                    <p>Explore with our rental cars.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- Cars  -->
    <section class="py-5 bg-light ">
        <section class="py-5">
            <div class="container fade-up">
                <h2 class="sub-heading text-center text-warning fw-bold mb-4">Featured Cars</h2>
                <p class="text-muted text-center">Explore some of our most popular and highly rated cars.</p>
            </div>
        </section>

        <!-- Cars dynamic data will we be here -->
        <div class="container">
            <div class="row g-4 " id="car-list-container">
                @foreach ($cars as $car)
                @if($car->price > 10000)
                <div class="col-md-6 col-sm-12">
                    <div class="card shadow-sm">
                        <img height="320px" src="{{ asset('car_images/' .  $car->image) }}" class="card-img-top" alt="{{$car->name}}">
                        <div class="card-body text-center">
                            <h5 class="fw-bold bg-black text-white p-1">{{$car->name}}</h5>
                            <p class="bg-black text-white p-1">PKR {{$car->price}}/day</p>
                            <p class="bg-black text-white p-1">Status: {{$car->status}}</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('car-details', $car->id) }}" class="btn btn-dark btn-sm">
                                    View Details
                                </a>
                                <!-- for saving image in local storage   -->
                                <?php
                                $carImageUrl = asset('car_images/' . $car->image)
                                ?>
                                <button class="btn btn-warning btn-sm"
                                    onclick="addToCart(
                                     '{{$car->id}}',
                                     '{{$car->name}}',
                                     '{{$car->model}}',
                                     '{{$car->year}}',
                                     '{{$car->price}}',
                                     '{{$carImageUrl}}',
                                     '{{$car->color}}',
                                     '{{$car->status}}'
                                )">
                                    <i class="fa-solid fa-cart-plus"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <!-- welcome Section   -->
        <div class="container mt-5 bg-white p-2">
            <section class="py-5 bg-dark text-center">
                <div class="container py-5 rounded-4 shadow-lg">
                    <i class="fa-solid fa-car-side text-warning fs-1 mb-3"></i>
                    <h1 class="text-warning fw-bold">Welcome to CarLink</h1>
                    <p class="fs-5 text-white fw-semibold bg-secondary bg-opacity-25 py-3 px-4 rounded-3 d-inline-block mt-3">
                        Your trusted car rental service across Karachi
                    </p>
                    <p class="fs-5 text-light bg-opacity-25 py-3 px-4 d-inline-block mt-3">
                        Discover your dream ride with CarLink — the leading car rental service offering the latest
                        models at unbeatable rates. Enjoy a comfortable, reliable, and safe journey with our experienced drivers.
                        Book your perfect vehicle easily and travel with confidence..
                    </p>
                    <div class="mt-4">
                        <a href="{{ route('aboutus') }}" class="btn btn-outline-light px-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <!-- welcome Section ends   -->
    </section>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

<script>
    function addToCart(id, name, model, year, price, image, color, status) {

        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        if (status.toLowerCase() === 'not available') {
            Swal.fire({
                title: `Selected car is not available right now!`,
                icon: "error",
                timer: 1500,
                showConfirmButton: false
            });
            return;
        }
        // checking duplicates 
        if (!cart.some(car => car.id === id)) {
            cart.push({
                id,
                model,
                name,
                year,
                price,
                image,
                color,
            });
            localStorage.setItem("cart", JSON.stringify(cart));
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

</html>