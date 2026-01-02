<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarLink - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous" />
</head>

<body class="bg-light">

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-11 col-md-6 col-lg-4" style="max-width: 450px;">

            <div class="card shadow-lg border-0 p-4 bg-white" style="border-radius: 15px;">

                <div class="text-center mb-4">
                    <i class="fa-solid fa-car-side text-warning fs-2 mb-2"></i>
                    <h4 class="fw-bold text-warning">CarLink - Login</h4>
                </div>

                <form method="POST" action="{{ route('auth.loginuser') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary">Email</label>
                        <input id="email" type="email" class="form-control mt-1 border-0" name="email" required
                            autofocus style="background-color: #f1f1f1; color: #212529;">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label text-secondary">Password</label>
                        <input id="password" type="password" class="form-control mt-1 border-0" name="password"
                            required style="background-color: #f1f1f1; color: #212529;">
                        <span onclick="Toggle()"
                            style="position: absolute; left:380px; bottom:90px; cursor: pointer; ">Show</span>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-warning fw-bold text-dark px-4">
                            Login
                        </button>
                    </div>
                </form>

                <!-- Sign Up Link -->
                <div class="text-center mt-3">
                    <small class="text-secondary">
                        Don’t have an account?
                        <a href="{{ route('auth.signup') }}" class="text-warning text-decoration-none fw-semibold">
                            Sign up
                        </a>
                    </small>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @include('sweetalert::alert')

    <Script>
        function Toggle() {

            const field = document.getElementById('password')
            if (field.type === "password") {
                field.type = "text";
            } else {
                field.type = "password";
            }
        }
    </Script>
</body>

</html>
