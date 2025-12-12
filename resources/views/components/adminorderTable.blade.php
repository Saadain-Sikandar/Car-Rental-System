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
            <th>Order Status</th>
        </tr>
    </thead>

    <tbody class="text-center">

        @foreach ($orders as $order)
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
                <td>{{ $order->order_status }}</td>
            </tr>

            <tr class="table-dark text-white">
                <th colspan="11">Customer Car / Order Details</th>
            </tr>

            {{--decode JSON --}}
            @php
                $cars = json_decode($order->order_data, true);
                $cars = is_array($cars) ? $cars : [];
            @endphp

            <tr class="bg-secondary text-white">
                <th>Order ID</th>
                <th>Car ID</th>
                <th>Car Name</th>
                <th>Model</th>
                <th>Color</th>
                <th>Year</th>
                <th>Image</th>
                <th>Price</th>
                <th colspan="3">Actions</th>
            </tr>

            @foreach ($cars as $car)
                <tr>
                    <th>{{ $order->id }}</th>
                    <td>{{ $car['id'] ?? '' }}</td>
                    <td>{{ $car['name'] ?? '' }}</td>
                    <td>{{ $car['model'] ?? '' }}</td>
                    <td>{{ $car['color'] ?? '' }}</td>
                    <td>{{ $car['year'] ?? '' }}</td>
                    <td>
                        @if(!empty($car['image']))
                            <img src="{{ asset($car['image']) }}" width="100" height="60" class="rounded">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $car['price'] ?? 0 }} PKR</td>
                    <td colspan="3">
                        <a href="{{ route('admin.adminEditOrderStatus', $order->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-pen-to-square"></i> Update Status
                        </a>
                    </td>
                </tr>
            @endforeach
        @endforeach

    </tbody>
</table>
    