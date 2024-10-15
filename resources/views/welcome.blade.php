<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Link Bootstrap CSS untuk styling cepat -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: white;
        }
        footer {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/">MyApp</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Main Content -->
<div class="container">
    @yield('content')
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 MyApp. All rights reserved.</p>
</footer>

<!-- Scripts (Bootstrap JS and jQuery) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
