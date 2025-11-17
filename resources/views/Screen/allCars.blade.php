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
            <!-- Car will show here  -->
        </div>
    </section>

    <!-- Footer  -->
    @include('components.Footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
   let cars = [
    {
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

   let container = document.getElementById('car-list-container');
   let carsHtml = '';

   // Load cart from localStorage (if it exists)
   let cart = JSON.parse(localStorage.getItem("cart")) || [];

   cars.map((car) => {
       carsHtml += `
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
       </div>`;
   });
   container.innerHTML = carsHtml;

   function viewCar(carId) {
       const selectedCar = cars.find(car => car.id == carId);
       localStorage.setItem("selectedCar", JSON.stringify(selectedCar));
   }
   function addToCart(id) {
       const carToAdd = cars.find(car => car.id == id);

       // no duplicate entries
       if (!cart.some(car => car.id === id)) {
           cart.push(carToAdd);
           localStorage.setItem("cart", JSON.stringify(cart));
           alert(`${carToAdd.name} added to cart!`);
       } else {
           alert(`${carToAdd.name} is already in your cart.`);
       }
   }
</script>

</html>