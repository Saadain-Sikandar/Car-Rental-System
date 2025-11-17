<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentals - CarLink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">

    @include('components.navbar')

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark">Your Rentals</h1>
            <p class="text-muted">Choose your ride and enjoy hassle-free car rental services.</p>
        </div>

        <div class="row g-4" id="rental-container">
            <!-- Cars will be dynamically loaded here -->
        </div>
    </div>

    @include('components.Footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // dummy car data
        const rentals = [{
                name: "Toyota Corolla",
                model: "2022",
                price: 8000,
                image: "https://i0.wp.com/bestsellingcarsblog.com/wp-content/uploads/2015/01/Toyota-Corolla-Pakistan-2014.-Picture-courtesy-of-zeeginition.com_.jpg"
            },
            {
                name: "Honda Civic",
                model: "2023",
                price: 7000,
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzueJEJMXguSYXNgbskvTQYR_TBXjXz3g36g&s"
            },
            {
                name: "Kia Sportage",
                model: "2021",
                price: 12000,
                image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn9RsQ1oixSRrlC1JZFLNxIMssVpy3Eb2LSw&s"
            },
        ];


        const container = document.getElementById("rental-container");

        rentals.map((car) => {
            const cardHtml = `
        <div class="col-sm-6 col-lg-4">
          <div class="card shadow-sm border-0 rounded-4 overflow-hidden h-100">
            <img src="${car.image}" alt="${car.name}" class="card-img-top" style="height:220px; object-fit:cover;">
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h5 class="card-title fw-bold mb-1">${car.name}</h5>
                <p class="text-muted mb-1">Model: ${car.model}</p>
                <p class="fw-semibold text-warning mb-3">Rs. ${car.price.toLocaleString()} / day</p>
              </div>
            </div>
          </div>
        </div>`;
            container.innerHTML += cardHtml;
        });
    </script>

</body>

</html>