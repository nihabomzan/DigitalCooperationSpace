<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #E5F7FF; /* Soft light blue background */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }
        .nav-link {
            border-radius: 1rem; /* Cute rounded corners */
            padding: 0.75rem 1.25rem;
            color: #fff;
            background-color: #60A5FA; /* Soft light blue color */
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        }
        .nav-link:hover {
            background-color: #3B82F6; /* Slightly darker blue on hover */
            transform: translateY(-2px); /* Slight lift effect on hover */
        }
        .nav-bar {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 30px 0;
            background-color: #D1E7FF; /* Light blue background for the navbar */
            border-radius: 0 0 1rem 1rem; /* Rounded bottom corners */
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .title {
            font-size: 2.5rem;
            color: #1D4ED8; /* Dark blue color for a warm greeting */
            font-weight: bold;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Welcome to Digital Cooperation Space</h1>
        @if (Route::has('login'))
            <div class="nav-bar">
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>