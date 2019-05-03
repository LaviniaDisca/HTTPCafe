<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL?>public/css/Login-style.css">
</head>

<body>
<div class="loginbox">
    <img src="<?php echo URL?>public/images/fixcil.png" class="avatar" alt="Image">
    <h1>Sign in</h1>
    <form action="">
        <p>
            Username :
        </p>
        <input type="text" name="username" placeholder="Enter username">
        <p>Password : </p>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit" formaction="Home"> Login</button>
        <a href="<?php echo URL?>Register">Don't have an account? Sign up!</a>
    </form>
</div>
</body>

</html>