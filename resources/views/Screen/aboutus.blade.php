<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <title>CarLink - About Us</title>
</head>

<body>

    <!-- navbar -->
    @include('components.navbar')

    <div class="container-fluid bg-light p-1">

        <div class="text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM5xAftNXjdjJsY7pBudR5gqF2rk323x-8Aw&s"
                class="img-fluid w-75" alt="CarLink Banner">
        </div>

        <div class="container mt-3 bg-white text-start p-4">
            <div class="mb-4">
                <h1 class="fw-bold fs-1 mb-3">About Us</h1>
                <p class="text-secondary">
                    Car Link is a trusted car rental company operating across Pakistan. We provide top-quality rental services at highly competitive rates. 
                    With our convenient online portal, you can effortlessly book vehicles or request a quote directly. 
                    Contact our customer service team for any inquiries or detailed assistance.
                </p>
            </div>  

            @php
                $item = $info->first(); 
            @endphp

            <div class="row gap-3">

                <!-- Contact Column -->
                <div class="col-md-4 col-sm-12">
                    <h4 class="fw-bolder">Contact Us At:</h4>
                    <p>
                        Rent a car in Karachi, Pakistan offers a wide range of rental vehicles for your travel needs
                        in all major cities across Pakistan. We are happy to help you 24/7.
                    </p>
                    @if($item)
                        <h5 class="fw-bold">+{{$item->contact}}</h5>
                    @else
                        <h5 class="text-muted">Not available</h5>
                    @endif
                </div>

                <!-- Email Column -->
                <div class="col-md-4 col-sm-12">
                    <h4 class="fw-bolder">Email Us At:</h4>
                    <p>
                        Our portal allows you to easily request a quote for your selected vehicle, then seamlessly proceed with online reservations.
                        For additional queries, feel free to email us, and our team will assist you.
                    </p>
                    @if($item)
                        <h5 class="fw-bold">{{$item->email}}</h5>
                    @else
                        <h5 class="text-muted">Not available</h5>
                    @endif
                </div>

                <!-- Visit Us Column -->
                <div class="col-md-4 col-sm-12">
                    <h4 class="fw-bolder">Visit Us:</h4>
                    <h5 class="fw-bolder text-decoration-underline">Karachi Office:</h5>
                    <ul class="list-unstyled" style="font-family: 'Poppins', sans-serif;">
                        @if($item)
                            <li><i class="fa-solid fa-location-dot me-2 text-warning"></i> {{$item->address}}</li>
                            <li><i class="fa-solid fa-envelope me-2 text-warning"></i> {{$item->email}}</li>
                            <li class="mt-2"><i class="fa-solid fa-phone me-2 text-warning"></i> +{{$item->contact}}</li>
                        @else
                            <li class="text-muted">Not available</li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
