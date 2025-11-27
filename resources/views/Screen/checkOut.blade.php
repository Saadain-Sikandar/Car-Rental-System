<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - CarLink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    @include('components.navbar')

    <div class="container my-5">
        <h2 class="text-center text-warning fw-bold mb-4">Checkout</h2>

        <!-- Cart Section -->
        <div id="cart-container" class="mb-5">
            <!-- cars in cart will show here   -->
        </div>

        <!-- Buyer Info -->
        <div class="card shadow-lg border-0">
            <div class="card-body">
                <h4 class="fw-bold text-center text-warning mb-4">Renter Details</h4>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Enter days</label>
                            <input type="no" class="form-control" placeholder="Enter no of days to rent" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Contact</label>
                            <input type="text" class="form-control" placeholder="03XX-XXXXXXX" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">CNIC</label>
                            <input type="text" class="form-control" placeholder="XXXXX-XXXXXXX-X" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Address</label>
                            <input type="text" class="form-control" placeholder="House #, Street, City" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">City</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Payment Method</label>
                            <select class="form-select" required>
                                <option value="">Select payment method</option>
                                <option value="Cash on Delivery">Cash on Delivery</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button id="orderBtn" type="submit" class="btn btn-dark px-5 py-2 fw-semibold" onclick="OrderHandle()">
                            Place Order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('components.footer')

    <script>
        const orderbtn = document.getElementById("orderBtn");
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        const container = document.getElementById("cart-container");

        if (cart.length === 0) {
            orderbtn.disabled = true;
        }

        if (cart.length > 0) {
            let carthtml = `
                <div class="card shadow border-0 mb-4">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3">Your Selected Cars</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Image</th>
                                        <th>Car Name</th>
                                        <th>Model</th>
                                        <th>color</th>
                                        <th>Year</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
            `;
            cart.map((car, index) => {
                carthtml += `
                    <tr>
                        <td><img src="${car.image}" width="100"></td>
                        <td>${car.name}</td>
                        <td>${car.model}</td>
                        <td>${car.color}</td>
                        <td>${car.year}</td>
                        <td>${car.price}</td>
                        <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(${index})">Remove</button></td>
                    </tr>
                `;
            });

            carthtml += `
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            `;

            container.innerHTML = carthtml;
        } else {
            container.innerHTML = `<h5 class="text-center text-danger">Your cart is empty!</h5>`;
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            localStorage.setItem("cart", JSON.stringify(cart));
            location.reload();
        }

        function OrderHandle() {
            alert("Order placed Successfully!");
            window.location.href = "{{ route('home') }}";
            localStorage.clear();
        }
    </script>
</body>

</html>