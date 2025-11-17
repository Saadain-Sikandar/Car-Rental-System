<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarLink Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light"> 

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-11 col-md-6 col-lg-4" style="max-width: 450px;">
            
            <div class="card shadow-lg border-0 p-4 bg-white" style="border-radius: 15px;">
                
                <div class="text-center mb-4">
                    <i class="fa-solid fa-car-side text-warning fs-2 mb-2"></i>
                    <h4 class="fw-bold text-warning">CarLink - Login</h4>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" class="text-secondary" />
                        <x-text-input id="email" class="form-control mt-1 border-0"
                            type="email" name="email" :value="old('email')" required autofocus
                            style="background-color: #f1f1f1; color: #212529;" autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" class="text-secondary" />
                        <x-text-input id="password" class="form-control mt-1 border-0"
                            type="password" name="password" required
                            style="background-color: #f1f1f1; color: #212529;" autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="form-check-input border-secondary" 
                            style="--bs-form-check-bg-checked: #ffc107; border-color: #ffc107;">
                        <label for="remember_me" class="form-check-label text-secondary">
                            {{ __('Remember me') }}
                        </label>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-between align-items-center">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-warning text-decoration-none small">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-primary-button class="btn btn-warning fw-bold text-dark px-4">
                           {{ __('Log in') }}
                        </x-primary-button>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
