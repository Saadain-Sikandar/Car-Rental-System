<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CarLink - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="col-11 col-md-6 col-lg-4" style="max-width: 450px;">
        <div class="card shadow-lg border-0 p-4 bg-white" style="border-radius: 15px;">

            <!-- Header -->
            <div class="text-center mb-4">
                <i class="fa-solid fa-car-side text-warning fs-2 mb-2"></i>
                <h4 class="fw-bold text-warning">CarLink - Sign Up</h4>
            </div>

            <!-- Signup Form -->
            <form method="POST" action="{{ route('auth.signup') }}">
                @csrf

                <!-- Username -->
                <div class="mb-3">
                    <label for="name" class="form-label text-secondary">Username</label>
                    <input type="text"
                        id="name"
                        name="name"
                        class="form-control border-0"
                        style="background-color: #f1f1f1; color: #212529;"
                        placeholder="Enter your username"
                        required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label text-secondary">Email</label>
                    <input type="email"
                        id="email"
                        name="email"
                        class="form-control border-0"
                        style="background-color: #f1f1f1; color: #212529;"
                        placeholder="Enter your email address"
                        required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label text-secondary">Password</label>
                    <input type="password"
                        id="password"
                        name="password"
                        class="form-control border-0"
                        style="background-color: #f1f1f1; color: #212529;"
                        placeholder="Enter your password"
                        required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label text-secondary">Confirm Password</label>
                    <input type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="form-control border-0"
                        style="background-color: #f1f1f1; color: #212529;"
                        placeholder="Re-enter your password"
                        required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-warning fw-bold text-dark w-100 mb-3">
                    Sign Up
                </button>

                <!-- Login Link -->
                <div class="text-center">
                    <small class="text-secondary">
                        Already have an account?
                        <a href="{{ route('auth.login') }}" class="text-warning text-decoration-none fw-semibold">
                            Log In
                        </a>
                    </small>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>