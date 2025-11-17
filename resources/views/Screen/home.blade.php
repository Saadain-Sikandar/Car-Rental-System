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

        <div class="container">
            <div class="row g-4 " id="car-list-container">
                <!-- Cars dynamic data will we be here -->
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
    @include('components.Footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    // 1. Car Data Array (Your provided data)
    let cars = [{
            "id": 1,
            "name": "Honda Civic",
            "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzueJEJMXguSYXNgbskvTQYR_TBXjXz3g36g&s",
            "description": "The Honda Civic combines sporty design with modern comfort and efficiency. Its sleek exterior, smooth handling, and spacious cabin make it a top choice for daily commutes or long drives across the city. A reliable sedan that delivers a refined driving experience.",
            "make": "Honda",
            "model": "Civic",
            "year": 2022,
            "color": "Grey / Black",
            "carNo": "KHI-A-101",
            "price": "PKR 9,000"
        },
        {
            "id": 2,
            "name": "Toyota Corolla",
            "image": "https://i0.wp.com/bestsellingcarsblog.com/wp-content/uploads/2015/01/Toyota-Corolla-Pakistan-2014.-Picture-courtesy-of-zeeginition.com_.jpg",
            "description": "A trusted and durable sedan, the Toyota Corolla is known for its excellent fuel efficiency, comfortable interior, and advanced safety features. It’s the perfect choice for families and professionals seeking a smooth and reliable ride.",
            "make": "Toyota",
            "model": "Corolla",
            "year": 2021,
            "color": "White",
            "carNo": "KHI-B-202",
            "price": "PKR 8,000"
        },
        {
            "id": 3,
            "name": "Toyota Hilux Revo",
            "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBQoF56hymJT4zvcjTUuRsh4BBkUKod7NfuA&s",
            "description": "The Toyota Hilux Revo is built for strength and performance. With its powerful engine, elevated stance, and durable build, it’s the ideal pickup for both adventurous journeys and professional use. A symbol of power, comfort, and capability.",
            "make": "Toyota",
            "model": "Hilux Revo",
            "year": 2023,
            "color": "Metallic Blue",
            "carNo": "KHI-C-303",
            "price": "PKR 15,000"
        },
        {
            "id": 4,
            "name": "Suzuki Alto",
            "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShVNIGASb0JHtl4r5nbUjAGNccmFyTTRYW4A&s",
            "description": "Compact, efficient, and easy to drive — the Suzuki Alto is the perfect city companion. With low fuel consumption and agile handling, it’s designed for everyday convenience while offering a comfortable and enjoyable drive.",
            "make": "Suzuki",
            "model": "Alto",
            "year": 2022,
            "color": "White / Silver",
            "carNo": "KHI-D-404",
            "price": "PKR 5,000"
        },
        {
            "id": 5,
            "name": "Toyota Fortuner",
            "image": "https://autos.hamariweb.com/images/carimages/5012_1.jpg",
            "description": "Experience luxury and adventure with the Toyota Fortuner. A powerful SUV that blends comfort, technology, and off-road performance, making it ideal for family trips, business travel, or scenic drives with unmatched confidence.",
            "make": "Toyota",
            "model": "Fortuner",
            "year": 2023,
            "color": "Black",
            "carNo": "KHI-E-505",
            "price": "PKR 18,000"
        },
        {
            "id": 6,
            "name": "KIA Sportage",
            "image": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn9RsQ1oixSRrlC1JZFLNxIMssVpy3Eb2LSw&s",
            "description": "A stylish and modern crossover SUV, the KIA Sportage delivers comfort, innovation, and smooth performance. With a premium interior, advanced infotainment, and dynamic design, it’s perfect for both family and executive rentals.",
            "make": "KIA",
            "model": "Sportage",
            "year": 2022,
            "color": "Red / White",
            "carNo": "KHI-F-606",
            "price": "PKR 12,000"
        }
    ];

    // 2. Get the container element where the cards will be placed
    const container = document.getElementById('car-list-container');
    let cardsHTML = '';

    const cart = JSON.parse(localStorage.getItem("cart")) || [];

    // 3. Loop through the array and build the HTML string
    cars.map((car) => {
        // Build the HTML structure for a single card
        const cardHtml = `
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm">
                    <img height="320px" src="${car.image}" class="card-img-top" alt="${car.name}">
                    <div class="card-body text-center">
                        <h5 class="fw-bold bg-black text-white p-1">${car.name}</h5>
                        <p class="bg-black text-white p-1">${car.price}/day</p>
                        <div class="d-flex justify-content-center gap-2">
                       <a href="{{ route('carDetails') }}" class="btn btn-dark btn-sm" onclick="viewCar(${car.id})">
                           View Details
                       </a>
                       <button class="btn btn-warning btn-sm" onclick="addToCart(${car.id})">
                           <i class="fa-solid fa-cart-plus"></i> Add
                       </button>
                   </div>
                    </div>
                </div>
            </div>
        `;
        cardsHTML += cardHtml;
    });
    // 4. add the generated HTML into the container 
    container.innerHTML = cardsHTML;

    function veiwCar(carid) {
        const selectedCar = cars.find(c => c.id == carid.id);
        localStorage.setItem('selectedCar', JSON.stringify(selectedCar));
    }

    function addToCart(id) {

        const carToadd = cars.find(c => c.id == id);

        // checking duplicates 
        if (!cart.some(car => car.id === id)) {
            cart.push(carToadd);
            localStorage.setItem("cart", JSON.stringify(cart));
            alert(`${carToadd.name} added to the cart!`);
        } else {
            alert(`${carToadd.name} already in your cart.`);
        }
    }
</script>

</html>