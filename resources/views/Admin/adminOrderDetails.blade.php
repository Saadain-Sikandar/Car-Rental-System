<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Order Detail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body class="bg-light">

    @include('components.adminNavbar')

    <div class="container mt-5">
        <h1 class="text-center text-warning fw-bold mb-4">Order List</h1>

        <div class="table-responsive">
            @foreach($orders as $order)
            <table class="table table-bordered table-striped table-hover align-middle shadow-sm">

                <thead class="table-dark text-center">
                    <tr>
                        <th>Order ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>CNIC</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Rent Days</th>
                        <th>Payment Method</th>
                        <th>Order Date</th>
                    </tr>
                </thead>

                <tbody class="text-center">


                    <!-- Customer Row  -->
                    <tr class="table-warning fw-bold">
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->fullname }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->contact }}</td>
                        <td>{{ $order->cnic }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->days }}</td>
                        <td>{{ $order->payment_method }}</td>
                        <td>{{ $order->created_at }}</td>

                    </tr>

                    {{-- Car Details Header --}}
                    <tr class="table-dark text-white">
                        <th colspan="10">Customer Car/Order details</th>
                    </tr>

                    <!-- Decode order_data (JSON) -->
                    @php
                    $cars = json_decode($order->order_data);
                    @endphp

                    <!-- Loop Cars  -->
                    <tr class="bg-secondary text-white">
                        <th>Order ID</th>
                        <th>Car ID</th>
                        <th>Car Name</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th>Year</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Order Status</th>
                        <th>Actions</th>
                    </tr>

                    @foreach($cars as $car)
                    <tr>
                        <th>{{$order->id}}</th>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->color }}</td>
                        <td>{{ $car->year }}</td>

                        <td>
                            @if($car->image)
                            <img src="{{ asset($car->image) }}" width="100" height="60" class="rounded">
                            @else
                            N/A
                            @endif
                        </td>

                        <td>{{ $car->price }} PKR</td>

                        <td>
                        </td>

                        <td>
                            <a href="{{ route('admin.EditOrderStatus', $orders->id) }}" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <!-- <form action="" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this car?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endforeach
        </div>
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
@include('sweetalert::alert')

</html>