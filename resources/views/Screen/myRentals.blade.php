<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentals - CarLink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
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
            @forelse($rentals as $car)
                <div class="col-sm-6 col-lg-4">
                    <div class="card shadow-sm border-0 rounded-4 overflow-hidden h-100">
                        <img src="{{ $car['image'] ?? '' }}" alt="{{ $car['name'] ?? 'Car' }}" class="card-img-top"
                            style="height:220px; object-fit:cover;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title fw-bold mb-1">{{ $car['name'] ?? 'N/A' }}</h5>
                                <p class="text-muted mb-1">Model: {{ $car['model'] ?? 'N/A' }}</p>
                                <p class="fw-semibold text-warning mb-1">Rs. {{number_format($car['price'] ?? 0) }} /
                                    day</p>
                                <p class="text-muted mb-1">Rented for: {{ $car['days'] ?? 0 }} day(s)</p>
                                <p class="text-muted mb-1">Order Status: <span
                                        class="fw-bold">{{ $car['status'] ?? 'Pending' }}</span></p>
                                <p class="text-muted mb-1">Ordered on:
                                    {{ $car['order_time']->format('d M Y, h:i A') }}</p>
                                <p class="fw-semibold text-success mb-0">Total: Rs.
                                    {{ number_format($car['total'] ?? 0) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">You have no rentals yet.</p>
            @endforelse
        </div>
    </div>

    @include('components.footer')
</body>

</html>
