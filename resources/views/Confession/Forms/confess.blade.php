<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confession</title>
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
<main class="confess-container">
    <div class="confess-form">
        <h2 class="form-title">Anonymous Confession</h2>
        
        <form method="POST" action="{{ route('confess.store') }}">
            @csrf
            <input type="hidden" name="username" value="{{ $username }}">
            <div class="form-group">
                <label for="confess" class="form-label">Your Confession</label>
                <textarea 
                    class="form-control" 
                    id="confess" 
                    name="confess" 
                    rows="4" 
                    placeholder="Write your confession here..." 
                    required></textarea>
                @error('confess')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary" id="confessSubmitBtn">
                <i class="fas fa-paper-plane me-2"></i>Submit Confession
            </button>
        </form>
        <script>
        document.querySelector('form').addEventListener('submit', function() {
            const btn = document.getElementById('confessSubmitBtn');
            btn.disabled = true;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
        });
        </script>

        <div class="action-buttons">
            <a href="/logging-page" class="btn btn-secondary">
                <i class="fas fa-sign-in-alt me-2"></i>Log in
            </a>
            <a href="/register" class="btn btn-secondary">
                <i class="fas fa-user-plus me-2"></i>Register
            </a>
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
</script>
</body>
</html>