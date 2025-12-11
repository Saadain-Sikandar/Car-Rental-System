<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Order Status</title>
</head>

<body>

    <!-- Heading -->
    <div class="d-flex justify-content-center align-items-center mb-4">
        <h2 class="text-warning fw-bold me-2">
            <i class="fa-solid fa-pen-to-square"></i> Update Order Status
        </h2>
    </div>

    <div class="card shadow-lg border-0 mx-auto mb-5 rounded-4" style="max-width: 700px;">
        <div class="card-body">

            <form action="{{ route('admin.updateOrderStatus', $orders->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                method('PUT')
                <div>
                    <label class="fw-bold">Order Status</label>

                    <div>
                        <input checked type="radio" name="order_status" id="pending" value="Pending">
                        <label for="pending">Pending</label>
                    </div>

                    <div>
                        <input type="radio" name="order_status" id="In Process" value="In Process">
                        <label for="In Process">In Process</label>
                    </div>

                    <div>
                        <input type="radio" name="order_status" id="Completed" value="Completed">
                        <label for="Completed">Completed</label>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary fw-bold">
                        <i class="fa-solid fa-upload me-1"></i> Update Car
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>