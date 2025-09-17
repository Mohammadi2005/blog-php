<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/login.css">
    <title>login</title>
</head>
</html>
<body>
    <div class="login-container">
        <form class="login-form" method="post" action="controller/sing-in.php">
            <h1>Welcome Back</h1>
            <p>Please login to your account</p>
            <div class="input-group">
                <input type="text" id="username" name="key" placeholder="Username or Mobile or Email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="sing-in">Login</button>
            <div class="bottom-text">
                <p>Don't have an account? <a href="#">Sign Up</a></p>
                <p><a href="#">Forgot password?</a></p>
            </div>
        </form>
    </div>
</body>
