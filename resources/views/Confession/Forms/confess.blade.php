<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confession</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f5f7ff;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    .confess-container {
        width: 100%;
        max-width: 600px;
        padding: 2rem;
        margin: 0 auto;
    }
    .confess-form {
        background: white;
        padding: 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
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
    textarea.form-control {
        min-height: 150px;
        resize: vertical;
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
    .btn-secondary {
        background: white;
        color: #2d3748;
        border: 1px solid #e2e8f0;
        padding: 0.8rem 2rem;
        font-weight: 500;
        border-radius: 0.5rem;
        transition: all 0.3s ease;
        margin: 0.5rem;
        text-decoration: none;
        display: inline-block;
    }
    .btn-secondary:hover {
        background: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-decoration: none;
        color: #2d3748;
    }
    .action-buttons {
        margin-top: 2rem;
        text-align: center;
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
    @media (max-width: 576px) {
        .confess-container {
            padding: 1rem;
        }
        .confess-form {
            padding: 1.5rem;
        }
    }
  </style>
</head>
<body>
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

            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane me-2"></i>Submit Confession
            </button>
        </form>

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
</body>
</html>