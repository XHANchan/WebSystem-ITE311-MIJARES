<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My CodeIgniter Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #0a0e17;
            background-image: radial-gradient(circle at 20% 20%, rgba(34, 197, 94, 0.08) 0%, transparent 40%),
                               radial-gradient(circle at 80% 80%, rgba(59, 130, 246, 0.08) 0%, transparent 40%);
            color: #cbd5e1;
            min-height: 100vh;
        }
        .navbar {
            background: #0d1321 !important;
            border-bottom: 2px solid #22c55e;
        }
        .navbar-brand {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            color: #22c55e !important;
        }
        .hero-card {
            max-width: 500px;
            margin: 120px auto;
            padding: 50px 40px;
            background: #10182a;
            border: 1px solid #1e293b;
            border-radius: 14px;
            text-align: center;
        }
        .hero-card h1 {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            color: #22c55e;
            margin-bottom: 20px;
        }
        .hero-card p {
            color: #94a3b8;
            font-size: 1rem;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ITE311</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" style="color:#22c55e;" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-card">
        <h1>Welcome!</h1>
        <p>This is my CodeIgniter + Bootstrap template.</p>
        <p>Hello, my name is Christian Mijares</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>