<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Web</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .buttons {
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-success {
            background-color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Portal Web</h1>
        <div class="buttons">
            <a href="login.blade.php" class="btn btn-primary">Login</a>
            <a href="register.blade.php" class="btn btn-success">Register</a>
        </div>
    </div>
    </body>
</html>
