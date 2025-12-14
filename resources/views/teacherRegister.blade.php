<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Ewit LMS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/css/intlTelInput.css">
    @vite(['resources/css/register.css', 'resources/js/register.js'])
</head>
<body>
    <div class="register-container">
        <div class="register-left">
            <div class="brand">
                <a href="/" class="logo">Ewit<span>.lk</span></a>
                <p class="tagline">Join thousands of Teachers achieving their goals</p>
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

        <div class="register-right">
            <div class="form-container">
                <div class="form-header">
                    <h1>Create Account as a Teacher</h1>
                    <p>Start your journey today</p>
                </div>

                <form action="{{route('teacher.store')}}" method="POST" class="register-form">
                    @csrf
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- Name Field -->
                    <div class="form-group">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="form-input" placeholder="John Doe" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="john@example.com" required>
                    </div>

                    <!-- Password Fields -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-input" placeholder="••••••••" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" placeholder="••••••••" required>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <div class="gender-group">
                            <label class="gender-option">
                                <input type="radio" name="gender" value="male" required>
                                <span class="gender-custom"></span>
                                <span class="gender-label">Male</span>
                            </label>
                            <label class="gender-option">
                                <input type="radio" name="gender" value="female" required>
                                <span class="gender-custom"></span>
                                <span class="gender-label">Female</span>
                            </label>
                        </div>
                    </div>

                    <!-- Experience -->
                    <div class="form-group">
                        <label for="experience" class="form-label">Experience</label>
                        <textarea id="experience" name="experience" class="form-input form-textarea" placeholder="Describe your teaching experience, qualifications, subjects taught, Worked schools, years of experience..." required></textarea>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone" class="form-label">Whatsapp Number</label>
                        <input type="tel" id="phone" name="phone" class="form-input" required>
                        <input type="hidden" id="phone_full" name="phone_full">
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" name="address" class="form-input" placeholder="123 Main Street, City" required>
                    </div>

                    <!-- Date of Birth -->
                    <div class="form-group">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" id="dob" name="dob" class="form-input" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary btn-block">Create Account</button>

                    <!-- Login Link -->
                    <p class="login-link">
                        Already have an account? <a href="/login">Sign In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/intlTelInput.min.js"></script>
</body>
</html>
