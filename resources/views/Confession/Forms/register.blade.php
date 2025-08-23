<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register - Confession Wall</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f7ff;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }
    .register-container {
        width: 100%;
        max-width: 500px;
        padding: 2rem;
    }
    .register-form {
        background: white;
        padding: 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 100%;
    }
    .form-title {
        color: #2d3748;
        font-weight: 600;
        margin-bottom: 2rem;
        text-align: center;
        position: relative;
    }
    .form-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
        border-radius: 2px;
    }
    .form-control {
        border: 1px solid #e2e8f0;
        border-radius: 0.5rem;
        padding: 0.8rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    .form-control:focus {
        border-color: #6B73FF;
        box-shadow: 0 0 0 3px rgba(107, 115, 255, 0.1);
    }
    .btn-primary {
        background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
        border: none;
        padding: 0.8rem 2rem;
        font-weight: 500;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        width: 100%;
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    .form-label {
        color: #4a5568;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }
    .error-message {
        color: #e53e3e;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }
    .login-link {
        text-align: center;
        margin-top: 1.5rem;
        color: #4a5568;
    }
    .login-link a {
        color: #000DFF;
        text-decoration: none;
        font-weight: 500;
    }
    .login-link a:hover {
        text-decoration: underline;
    }
    .input-group-text {
        background: transparent;
        border: 1px solid #e2e8f0;
        border-right: none;
        color: #4a5568;
    }
    .input-group .form-control {
        border-left: none;
    }
    .input-group .form-control:focus {
        border-left: none;
    }
    @media (max-width: 576px) {
        .register-container {
            padding: 1rem;
        }
        .register-form {
            padding: 1.5rem;
        }
    }
  </style>
</head>
<body>
<main class="register-container">
    <div class="register-form">
        <h2 class="form-title">Create Account</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" 
                           class="form-control" 
                           id="name" 
                           name="name" 
                           placeholder="Enter your name" 
                           required />
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-at"></i>
                    </span>
                    <input type="text" 
                           class="form-control" 
                           id="username" 
                           name="username" 
                           placeholder="Choose a username" 
                           required />
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" 
                           class="form-control" 
                           id="password" 
                           name="password" 
                           placeholder="Create a password" 
                           required />
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" 
                           class="form-control" 
                           id="password_confirmation" 
                           name="password_confirmation" 
                           placeholder="Confirm your password" 
                           required />
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-user-plus me-2"></i>Create Account
            </button>
        </form>

        <div class="login-link">
            Already have an account? <a href="{{ route('logging-page') }}">Log in here</a>
        </div>
    </div>
</main>
</body>
</html>