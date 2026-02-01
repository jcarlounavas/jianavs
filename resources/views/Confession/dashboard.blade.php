<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Confessions</title>
  <link rel="icon" href="{{ asset('Personal.png') }}" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<body>
<main>
    <div class="container py-4">
        <div class="welcome-section">
            <div class="welcome-message">
                <div class="welcome-text">
                    <h4>Welcome, {{ Session::get('name') }}! 👋</h4>
                    <p>How's your day?</p>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn" id="logoutBtn">
                        <i class="fas fa-sign-out-alt"></i>
                        Log out
                    </button>
                </form>
            </div>
        </div>

        <div class="user-link-section">
            <h3 class="user-link-title">Share Your Confession Link</h3>
            <div class="user-link-input">
                <div class="input-group">
                    <input type="text" 
                           class="form-control" 
                           id="userLink" 
                           value="{{ url('/confess/' . Session::get('username')) }}" 
                           readonly>
                    <button class="btn btn-primary" id="copyLinkBtn" onclick="copyLink()">
                        <i class="fas fa-copy me-2"></i>Copy
                    </button>
                </div>
                <div class="copy-message" id="copyMessage">
                    <i class="fas fa-check me-1"></i>Link copied to clipboard!
                </div>
            </div>
            <p class="text-muted mt-3">
                Share this link with others to receive anonymous confessions
            </p>
        </div>

        <h2 class="text-center mb-4 section-title">Received confessions</h2>
        @if($cons->count() > 0)
            <div class="row">
                @foreach ($cons as $confession)
                <div class="col-md-6 col-lg-4">
                    <div class="card-body">
                        <div class="confession-container">
                            <div class="confession-text">
                                {{ $confession->confess }}
                            </div>
                            <div class="confession-date">
                                <i class="far fa-clock"></i>
                                Received on: {{ $confession->created_at->format('F j, Y g:i A') }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="no-confessions">
                <h3>No confessions yet</h3>
                <p>You haven't received any confessions yet. Share your username with others to receive confessions!</p>
            </div>
        @endif
        <div class="mt-4" id="paginationContainer">
            {{ $cons->links() }}
        </div>
    </div>
</main>

<div id="pageLoadOverlay" class="page-load-overlay show-on-load">
    <div class="page-load-spinner">
        <i class="fas fa-spinner fa-spin fa-3x"></i>
        <p>Loading...</p>
    </div>
</div>

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
document.querySelector('form[action*="logout"]').addEventListener('submit', function() {
    const btn = document.getElementById('logoutBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Logging out...';
});

function copyLink() {
    const linkInput = document.getElementById('userLink');
    const copyMessage = document.getElementById('copyMessage');
    const copyBtn = document.getElementById('copyLinkBtn');
    const originalContent = copyBtn.innerHTML;

    copyBtn.disabled = true;
    copyBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Copying...';

    linkInput.select();
    linkInput.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(linkInput.value).then(() => {
        copyMessage.style.display = 'block';
        copyBtn.innerHTML = '<i class="fas fa-check me-2"></i>Copied!';
        setTimeout(() => {
            copyBtn.disabled = false;
            copyBtn.innerHTML = originalContent;
            copyMessage.style.display = 'none';
        }, 2000);
    }).catch(() => {
        copyBtn.disabled = false;
        copyBtn.innerHTML = originalContent;
    });
}

document.querySelectorAll('#paginationContainer a').forEach(link => {
    link.addEventListener('click', function(e) {
        if (this.getAttribute('href') && this.getAttribute('href') !== '#') {
            document.getElementById('pageLoadOverlay').classList.add('active');
        }
    });
});
</script>
</body>
</html>