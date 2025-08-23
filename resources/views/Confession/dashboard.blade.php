<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Confessions</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<header>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f7ff;
    }
    .welcome-section {
        background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
        color: white;
        padding: 2rem;
        border-radius: 1rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .welcome-message {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .welcome-text {
        flex: 1;
    }
    .welcome-text h4 {
        font-size: 1.8rem;
        font-weight: 600;
        margin: 0;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }
    .welcome-text p {
        margin: 0.5rem 0 0;
        opacity: 0.9;
        font-size: 1.1rem;
    }
    .logout-btn {
        background-color: white;
        color: #000DFF;
        border: none;
        padding: 0.7rem 1.8rem;
        border-radius: 0.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .logout-btn:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-body {
        background-color: white;
        border-radius: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: none;
        width: 100%;
        min-height: 200px;
        margin-bottom: 1rem;
    }
    .card-body:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
    .confession-text {
        font-size: 1.1rem;
        line-height: 1.6;
        margin: 1rem 0;
        color: #2d3748;
    }
    .confession-date {
        font-size: 0.9rem;
        color: #718096;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .confession-container {
        padding: 1.5rem;
    }
    .no-confessions {
        text-align: center;
        padding: 3rem;
        background-color: white;
        border-radius: 1rem;
        margin: 2rem 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    .no-confessions h3 {
        color: #2d3748;
        margin-bottom: 1rem;
    }
    .no-confessions p {
        color: #718096;
    }
    .section-title {
        color: #2d3748;
        font-weight: 600;
        margin-bottom: 2rem;
        position: relative;
        display: inline-block;
    }
    .section-title::after {
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
    .user-link-section {
        background: white;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        text-align: center;
    }
    .user-link-title {
        color: #2d3748;
        font-weight: 600;
        margin-bottom: 1.5rem;
    }
    .user-link-input {
        max-width: 500px;
        margin: 0 auto;
    }
    .user-link-input .input-group {
        margin-bottom: 1rem;
    }
    .user-link-input .form-control {
        border: 1px solid #e2e8f0;
        border-radius: 0.5rem 0 0 0.5rem;
        padding: 0.8rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    .user-link-input .btn {
        border-radius: 0 0.5rem 0.5rem 0;
        padding: 0.8rem 1.5rem;
    }
    .copy-message {
        color: #48bb78;
        font-size: 0.875rem;
        margin-top: 0.5rem;
        display: none;
    }
    </style>
</header>
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
                    <button type="submit" class="logout-btn">
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
                    <button class="btn btn-primary" onclick="copyLink()">
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
    </div>
</main>

<script>
function copyLink() {
    const linkInput = document.getElementById('userLink');
    const copyMessage = document.getElementById('copyMessage');
    
    // Select the text
    linkInput.select();
    linkInput.setSelectionRange(0, 99999);
    
    // Copy the text
    navigator.clipboard.writeText(linkInput.value).then(() => {
        // Show the copy message
        copyMessage.style.display = 'block';
        
        // Hide the message after 2 seconds
        setTimeout(() => {
            copyMessage.style.display = 'none';
        }, 2000);
    });
}
</script>
</body>
</html>