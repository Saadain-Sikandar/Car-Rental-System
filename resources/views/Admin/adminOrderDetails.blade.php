<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Order Detail</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body class="bg-light">

    @include('components.adminNavbar')

    <div class="container mt-5">
        <h1 class="text-center text-warning fw-bold mb-4">Order List</h1>

        <!-- =================       PENDING ORDERS  ======================  -->
        <h2 class="text-center bg-black p-2 text-warning fw-bold mb-4">Pending Orders</h2>
        <div class="table-responsive mb-5">

            @if ($orders->where('order_status', 'Pending')->isEmpty())
            <p class="text-center text-danger fw-bold mb-5">No Pending Orders Found.</p>
            @else
            @include('components.adminorderTable', [
            'orders' => $orders->where('order_status', 'Pending'),
            ])
            @endif
        </div>

        <!-- ===================== IN-PROCESS ORDERS ======================  -->
        <h2 class="text-center text-info bg-dark p-2 fw-bold mb-4">In-Process Orders</h2>
        <div class="table-responsive mb-5">

            @if ($orders->where('order_status', 'In Process')->isEmpty())
            <p class="text-center text-danger fw-bold mb-5">No Orders in Process.</p>
            @else
            @include('components.adminorderTable', [
            'orders' => $orders->where('order_status', 'In Process'),
            ])
            @endif
        </div>
        <!-- ===================== COMPLETED ORDERS ======================  -->
        <h2 class="text-center text-success bg-dark  p-2 fw-bold mb-4">Completed Orders</h2>
        <div class="table-responsive mb-5">
            @if ($orders->where('order_status', 'Completed')->isEmpty())
            <p class="text-center text-danger fw-bold mb-5">No Orders In List.</p>
            @else
            @include('components.adminorderTable', [
            'orders' => $orders->where('order_status', 'Completed'),
            ])
            @endif
        </div>
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
@include('sweetalert::alert')

</html>