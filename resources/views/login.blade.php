<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ewit LMS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/login.css'])
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <div class="brand">
                <a href="/" class="logo">Ewit<span>.lk</span></a>
                <p class="tagline">Welcome back! Continue your journey Now</p>
            </div>
            <div class="illustration">
                <div class="illustration-content">
                    <div class="mock-header">
                        <div class="mock-dot"></div>
                        <div class="mock-dot"></div>
                        <div class="mock-dot"></div>
                    </div>
                    <div class="mock-content">
                        <div class="mock-line short"></div>
                        <div class="mock-line long"></div>
                        <div class="mock-line medium"></div>
                        <div class="mock-cards">
                            <div class="mock-card"></div>
                            <div class="mock-card"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-right">
            <div class="form-container">
                <div class="form-header">
                    <h1>Welcome Back</h1>
                    <p>Sign in to continue</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="" method="POST" class="login-form">
                    @csrf
                    
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="john@example.com" required>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-input" placeholder="••••••••" required>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="form-options">
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                    <!-- Register Link -->
                    <p class="register-link">
                        Don't have an account? <a href="{{route('welcome')}}">Register</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
