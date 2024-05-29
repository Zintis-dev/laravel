<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('stylesheet.css') }}" rel="stylesheet">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100 ">
    <div class="card p-4 shadow-sm panel">
        <h1 class="text-center mb-4">Litter</h1>
        <h3 class="text-center mb-4">What's poppin`?</h3>
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
