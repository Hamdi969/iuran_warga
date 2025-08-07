<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Landing Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #1e2140, #1b7fd1);
      color: white;
    }

    .hero {
      min-height: 80vh;
      display: flex;
      align-items: center;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 800;
      line-height: 1.2;
    }

    .hero p {
      font-size: 1.125rem;
      line-height: 1.6;
      margin-top: 1rem;
      margin-bottom: 2rem;
    }

    .hero-img {
      max-width: 100%;
    }

    .nav-link {
      color: white !important;
      font-weight: bold;
      margin: 0 10px;
    }
  </style>
</head>
<body>

  @include('navbar')

  @yield('content')

  <footer class="text-center text-white py-4">
    <p>&copy; 2025 bubun solihin</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
