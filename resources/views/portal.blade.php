<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-login {
            background-color: #3498db;
            color: #fff;
        }
        .btn-register {
            background-color: #2ecc71;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Web Portal</h1>
        <a href="login" class="btn btn-login">Login</a>
        <a href="register" class="btn btn-register">Register</a>
        <a href="guest" class="btn btn-guest">guest</a>
    </div>
</body>
</html>