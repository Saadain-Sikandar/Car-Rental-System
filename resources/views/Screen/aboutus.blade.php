<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CarLink - About us</title>
</head>

<body>

    <!-- navbar -->
    @include('components.navbar')

    <div class="container-fluid bg-light p-1">

        <div class="text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM5xAftNXjdjJsY7pBudR5gqF2rk323x-8Aw&s"
                class="img-fluid w-75" alt="...">
        </div>

        <div class="container mt-3 bg-white text-start">
            <div class="d-flex align-items-center p-3 flex-wrap">
                <div>
                    <h1 class="fw-bold fs-1 mb-3">About Us</h1>
                    <p class="text-secondary">
                        Car Link is a trusted car rental company operating,
                        We provide top-quality rental services at highly competitive rates. With our convenient online portal, you can effortlessly
                        book vehicles in cities like Lahore, Islamabad, Karachi and more. You can also request a quote directly through our portal
                        or contact our customer service team for any inquiries or detailed assistance.
                    </p>
                </div>
            </div>

            <div class="row p-2 gap-1">

                <div class="col-md-4 col-sm-12 ">
                    <h4 class="fw-bolder">Contact Us At:</h4>
                    <p>Rent a car karachi Pakistan offers a wide range of rental vehicles for your travel needs
                        in all major cities across Pakistan. We are happy to help you 24 hours 7 days a week.
                    </p>
                    <h5 class="fs-bolder">+92 300 1234567</h5>
                </div>
                <div class="col-md-4 col-sm-12 ">
                    <h4 class="fw-bolder">Email Us At:</h4>
                    <p>Our car rental portal allows you to easily request a quote for your selected vehicle, after which you
                        can seamlessly proceed with online reservations. For any additional queries, feel free to email us,
                        and our team will be happy to assist you.
                    </p>
                    <h5 class="fs-bolder">info@carlink.pk</h5>
                </div>
                <div class="col-md-4 col-sm-12 ">
                    <h4 class="fw-bolder">Visit Us:</h4>
                    <h4 class="fw-bolder text-decoration-underline ">Karachi office:</h4>
                    <ul class="list-unstyled" style="font-family: 'Poppins', sans-serif;">
                        <li><i class="fa-solid fa-location-dot me-2 text-warning"></i> abc-Block DHA Phase7 karachi, Pakistan.</li>
                        <li><i class="fa-solid fa-envelope me-2 text-warning"></i> support@carlink.pk</li>
                        <li class="mt-2"><i class="fa-solid fa-phone me-2 text-warning"></i> +92 300 1234567</li>
                        <li><i class="fa-solid fa-phone me-2 text-warning"></i> +92 345 7654321</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- footer  -->
    @include('components.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>