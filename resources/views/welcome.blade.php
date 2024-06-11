<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container {
            text-align: center;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="{{ asset('img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <h1>Selamat Datang di Aplikasi CARGO</h1>
        <p>Semoga hari Anda penuh dengan semangat dan antusiasme. CARGO siap untuk membantu Anda. </p>
    </div>
</body>
</html>
