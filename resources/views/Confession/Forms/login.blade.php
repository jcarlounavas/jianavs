<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Confession Wall</title>
  <link rel="icon" href="{{ asset('Personal.png') }}" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div id="pageLoadOverlay" class="page-load-overlay show-on-load">
    <div class="page-load-spinner">
        <i class="fas fa-spinner fa-spin fa-3x"></i>
        <p>Loading...</p>
    </div>
</div>
<main class="login-container">
    <div class="login-form">
        <h2 class="form-title">Welcome Back</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" 
                           class="form-control" 
                           id="username" 
                           name="username" 
                           placeholder="Enter your username" 
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
                           placeholder="Enter your password" 
                           required />
                </div>
            </div>

            <button type="submit" class="btn btn-primary" id="loginSubmitBtn">
                <i class="fas fa-sign-in-alt me-2"></i>Log In
            </button>
        </form>

        <div class="register-link">
            Don't have an account? <a href="{{ route('register') }}">Register here</a>
        </div>
    </div>
</main>
<script>
window.addEventListener('DOMContentLoaded', function() {
    document.getElementById('pageLoadOverlay').classList.remove('show-on-load');
});
document.querySelectorAll('a[href]').forEach(function(link) {
    link.addEventListener('click', function() {
        var href = this.getAttribute('href');
        if (href && href !== '#' && !href.startsWith('#') && (!href.startsWith('http') || this.hostname === window.location.hostname)) {
            document.getElementById('pageLoadOverlay').classList.add('active');
        }
    });
});
document.querySelector('form').addEventListener('submit', function() {
    const btn = document.getElementById('loginSubmitBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Logging in...';
});
</script>
</body>
</html>