<!-- app/Views/login.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMS Web App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .login-container {
            text-align: center;
            max-width: 400px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
        }

        .logo {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .image-container {
            flex: 1;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .footer-text {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="login-container">
<img src="<?= base_url('public/images/bag.png'); ?>" alt="Logo" class="logo">
    <h2>SIMS Web App</h2>

    <!-- Form for username and password -->
    <form action="/auth/loginAttempt" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
<br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
<br>
        <button type="submit">Masuk</button>
    </form>

    <div class="footer-text">
        <p>Belum punya akun? <a href="#">Buat Akun</a></p>
    </div>
</div>

<div class="image-container">
<img src="<?= ('public/images/cover.png'); ?>" alt="Image">
</div>

</body>
</html>